<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.pages.super_admin.blog.index');
    }

    public function create()
    {
        return view('admin.pages.super_admin.blog.create');
    }

    public function edit($id)
    {
        return view('admin.pages.super_admin.blog.edit');
    }

    public function detail($id)
    {
        return view('admin.pages.super_admin.blog.detail')->with('id', $id);
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            try {
                $file = $request->file('upload');

                // Validate file
                $validator = Validator::make($request->all(), [
                    'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'uploaded' => 0,
                        'error' => [
                            'message' => $validator->errors()->first('upload')
                        ]
                    ]);
                }

                // Xử lý tên file
                $originName = $file->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::slug($fileName) . '_' . time() . '.' . $extension;

                // Lưu file vào thư mục storage/public/blogImg
                $file->storeAs('public/blogImg', $fileName);

                // Trả về response theo đúng format CKEditor yêu cầu
                return response()->json([
                    'uploaded' => 1,
                    'fileName' => $fileName,
                    'url' => asset('storage/blogImg/' . $fileName)
                ]);
            } catch (Exception $e) {
                Log::error('CKEditor upload error: ' . $e->getMessage());
                return response()->json([
                    'uploaded' => 0,
                    'error' => [
                        'message' => 'Error uploading file: ' . $e->getMessage()
                    ]
                ]);
            }
        }

        return response()->json([
            'uploaded' => 0,
            'error' => [
                'message' => 'No file was uploaded.'
            ]
        ]);
    }
}
