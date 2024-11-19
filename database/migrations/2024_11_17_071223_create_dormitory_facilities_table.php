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
        Schema::create('dormitory_facilities', function (Blueprint $table): void {
            $table->id();
            $table->integer('room_id');
            $table->integer('bed');
            $table->integer('wardrobe');
            $table->integer('air_conditioner');
            $table->float('area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_facilities');
    }
};
