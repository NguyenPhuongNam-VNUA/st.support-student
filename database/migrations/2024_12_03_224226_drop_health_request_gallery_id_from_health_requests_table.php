<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Kiểm tra xem cột có tồn tại không, nếu có thì xóa
        Schema::table('health_requests', function (Blueprint $table): void {
            if (Schema::hasColumn('health_requests', 'healthRequestGallery_id')) {
                $table->dropColumn('healthRequestGallery_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Thêm lại cột nếu cần khôi phục
        Schema::table('health_requests', function (Blueprint $table): void {
            $table->integer('healthRequestGallery_id')->nullable();
        });
    }
};
