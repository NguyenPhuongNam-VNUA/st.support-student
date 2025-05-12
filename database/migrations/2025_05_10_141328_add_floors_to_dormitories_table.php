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
            if (!Schema::hasColumn('dormitories', 'floor')) {
                $table->integer('floor')->default(0)->after('total_rooms');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dormitories', function (Blueprint $table): void {
            if (Schema::hasColumn('dormitories', 'floor')) {
                $table->dropColumn('floor');
            }
        });
    }
};
