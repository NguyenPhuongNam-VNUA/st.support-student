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
        // Thêm các cột 'name', 'code', 'phone' nếu chưa tồn tại
        if (!Schema::hasColumn('health_requests', 'name')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->string('name')->after('id');
            });
        }

        if (!Schema::hasColumn('health_requests', 'code')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->string('code')->after('name');
            });
        }

        if (!Schema::hasColumn('health_requests', 'phone')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->string('phone')->after('code');
            });
        }

        // Xóa cột 'doctor_id' và 'student_id' nếu tồn tại
        if (Schema::hasColumn('health_requests', 'doctor_id')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->dropColumn('doctor_id');
            });
        }

        if (Schema::hasColumn('health_requests', 'student_id')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->dropColumn('student_id');
            });
        }

        // (Loại bỏ) Không thêm cột 'healthRequestGallery_id' vì không cần thiết
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Xóa các cột 'name', 'code', 'phone' nếu tồn tại
        if (Schema::hasColumn('health_requests', 'name')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->dropColumn('name');
            });
        }

        if (Schema::hasColumn('health_requests', 'code')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->dropColumn('code');
            });
        }

        if (Schema::hasColumn('health_requests', 'phone')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->dropColumn('phone');
            });
        }

        // Thêm lại cột 'doctor_id' và 'student_id' nếu cần
        Schema::table('health_requests', function (Blueprint $table): void {
            $table->foreignId('doctor_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->nullable()->constrained()->onDelete('cascade');
        });
    }
};
