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
        Schema::table('dormitories', function (Blueprint $table): void {
            if (!Schema::hasColumn('dormitories', 'thumbnail')) {
                $table->string('thumbnail')->nullable();
            }
            if (!Schema::hasColumn('dormitories', 'gallery')) {
                $table->json('gallery')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dormitories', function (Blueprint $table): void {
            if (Schema::hasColumn('dormitories', 'thumbnail')) {
                $table->dropColumn('thumbnail');
            }
            if (Schema::hasColumn('dormitories', 'gallery')) {
                $table->dropColumn('gallery');
            }
        });
    }
};
