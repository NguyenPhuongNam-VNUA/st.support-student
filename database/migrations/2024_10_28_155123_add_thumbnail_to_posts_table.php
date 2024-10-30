<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('posts', 'thumbnail')) {
            Schema::table('posts', function (Blueprint $table): void {
                $table->string('thumbnail')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('posts', 'thumbnail')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('thumbnail');
            });
        }
    }
};


