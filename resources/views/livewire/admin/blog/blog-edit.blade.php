@section('script')
<script>
    const style = document.createElement('style');
    style.innerHTML = `
        .ck-content img {
            max-width: 100%;
            height: auto;
        }
    `;
    document.head.appendChild(style);

    function ImageResponsivePlugin(editor) {
        editor.conversion.for('downcast').add(dispatcher => {
            dispatcher.on('insert:image', (evt, data, conversionApi) => {
                const viewWriter = conversionApi.writer;
                const figure = conversionApi.mapper.toViewElement(data.item);
                const imageElement = figure.getChild(0);

                viewWriter.setAttribute('class', 'img-responsive', imageElement);
                viewWriter.removeAttribute('style', imageElement);
            });
        });
    }
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#post_ckeditor'), {
                extraPlugins: [ImageResponsivePlugin],
                simpleUpload: {
                    // Chỉ sử dụng một cấu hình upload
                    uploadUrl: '{{ route("admin.blog.upload") }}',
                    withCredentials: true,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    }
                },
                image: {
                    resizeOptions: [{
                            name: 'resizeImage:original',
                            value: null,
                            label: 'Original'
                        },
                        {
                            name: 'resizeImage:50',
                            value: '50',
                            label: '50%'
                        },
                        {
                            name: 'resizeImage:75',
                            value: '75',
                            label: '75%'
                        }
                    ],
                    toolbar: [
                        'imageStyle:inline',
                        'imageStyle:block',
                        'imageStyle:side',
                        '|',
                        'toggleImageCaption',
                        'imageTextAlternative',
                        '|',
                        'resizeImage'
                    ]
                },
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'imageUpload',
                        'undo',
                        'redo'
                    ]
                }
            })
            .then(editor => {
                // Add custom upload adapter if needed
                editor.plugins.get('FileRepository').createUploadAdapter = loader => {
                    return {
                        upload: () => {
                            return loader.file.then(file => {
                                const formData = new FormData();
                                formData.append('upload', file);

                                return fetch('{{ route("admin.blog.upload") }}', {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                        body: formData
                                    })
                                    .then(response => response.json())
                                    .then(response => {
                                        if (!response.uploaded) {
                                            throw response.error.message;
                                        }
                                        return {
                                            default: response.url
                                        };
                                    });
                            });
                        },
                        abort: () => {
                            console.log('Upload aborted');
                        }
                    };
                };

                editor.model.document.on('change:data', () => {
                    @this.set('content', editor.getData());
                });

                Livewire.on('contentUpdated', content => {
                    editor.setData(content);
                });

                window.editor = editor;
            })
            .catch(error => {
                console.error('CKEditor initialization failed:', error);
            });
    });
</script>
@endsection
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-info"></i>
                Thông tin bài viết
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="form-label">
                        Tiêu đề: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="title" type="text" class="form-control  @error('title') is-invalid @enderror">
                        @error('title')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Ảnh đại diện bài viết: <span class="text-danger">*</span>
                    </label>
                    <div>
                        <input wire:model.live="new_thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror">
                        @error('new_thumbnail')
                        <label class="text-danger mt-1">{{ $message }}</label>
                        @enderror
                    </div>

                    <div class="mt-2">
                        @if ($new_thumbnail)
                        <img src="{{ $new_thumbnail->temporaryUrl() }}" alt="New thumbnail" class="img-thumbnail" width="150">
                        @elseif ($thumbnail)
                        <img src="{{ asset('storage/' . $thumbnail) }}" alt="{{ $title }}" class="img-thumbnail" width="150">
                        @else
                        <label class="text-danger mt-1">Chưa tải ảnh lên</label>
                        @endif
                    </div>
                </div>
                @if(Auth::user()->role()->where('name', 'admin')->exists())
                    <div class="form-group mt-2">
                        <label class="form-label">
                            Danh mục bài viết: <span class="text-danger">*</span>
                        </label>
                        <div>
                            <select wire:model.live="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">Chọn danh mục</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <label class="text-danger mt-1">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <label class="form-label">
                        Nội dung bài viết: <span class="text-danger">*</span>
                    </label>
                    <div wire:ignore>
                        <textarea
                            id="post_ckeditor"
                            class="form-control">
                            {!! $content !!}
                        </textarea>
                    </div>
                    @error('content')
                    <label class="text-danger mt-1">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bold">
                <i class="ph-gear-six"></i>
                Hành động
            </div>
            <div class="card-body d-flex align-items-center gap-1">
                <button wire:click="update" class="btn btn-primary" type="submit"><i class="ph-floppy-disk"></i>Cập nhật</button>
                <a href="{{ route('admin.blogs.index') }}" type="button" class="btn btn-warning"><i class="ph-arrow-counter-clockwise"></i> Trở lại</a>
            </div>
        </div>
    </div>
</div>
