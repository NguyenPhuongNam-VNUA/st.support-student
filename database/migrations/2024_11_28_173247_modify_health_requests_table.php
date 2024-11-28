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
        if (!Schema::hasColumn('health_requests', 'name', 'code', 'phone')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->string('name');
                $table->string('code');
                $table->string('phone');
            });
        }

        if (Schema::hasColumn('health_requests', 'doctor_id', 'student_id')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->dropColumn('doctor_id');
                $table->dropColumn('student_id');
            });
        }

        Schema::table('health_requests', function (Blueprint $table): void {
            $table->integer('healthRequestGallery_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('health_requests', 'name', 'code', 'phone')) {
            Schema::table('health_requests', function (Blueprint $table): void {
                $table->dropColumn('name');
                $table->dropColumn('code');
                $table->dropColumn('phone');
            });
        }

        Schema::table('health_requests', function (Blueprint $table): void {
            $table->dropColumn('healthRequestGallery_id');
        });
    }
};
