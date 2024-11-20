<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenerateSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        DB::table('services')->get()->each(function ($service): void {
            $slug = Str::slug($service->name . '-' . $service->id);
            DB::table('services')->where('id', $service->id)->update(['slug' => $slug]);
            $this->info("Đã cập nhật slug cho sản phẩm: {$service->name}");
        });

        DB::table('motels')->get()->each(function ($motel): void {
            $slug = Str::slug($motel->address . '-' . $motel->id);
            DB::table('motels')->where('id', $motel->id)->update(['slug' => $slug]);
            $this->info("Đã cập nhật slug cho danh mục: {$motel->address}");
        });

        DB::table('posts')->get()->each(function ($post): void {
            $slug = Str::slug($post->title . '-' . $post->id);
            DB::table('posts')->where('id', $post->id)->update(['slug' => $slug]);
            $this->info("Đã cập nhật slug cho bài viết: {$post->title}");
        });
    }
}
