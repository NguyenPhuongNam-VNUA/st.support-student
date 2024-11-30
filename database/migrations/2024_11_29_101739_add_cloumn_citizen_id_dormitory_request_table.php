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
        if (!Schema::hasColumn('dormitory_request', 'citizen_id')) {
            Schema::table('dormitory_request', function (Blueprint $table): void {
                $table->string('citizen_id')->nullable()->after('phone');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('dormitory_request', 'citizen_id')) {
            Schema::table('dormitory_request', function (Blueprint $table): void {
                $table->dropColumn('citizen_id')->nullable();
            });
        }
    }
};
