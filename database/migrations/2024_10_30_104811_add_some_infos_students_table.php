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
        if (!Schema::hasColumn('students', 'bod', 'username', 'password')) {
            Schema::table('students', function (Blueprint $table): void {
                $table->date('bod');
                $table->string('username');
                $table->string('password');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table): void {
            $table->dropColumn('bod');
            $table->dropColumn('username');
            $table->dropColumn('password');
        });
    }
};
