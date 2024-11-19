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
        if (!Schema::hasColumn('rooms', 'thumbnail')) {
            Schema::table('rooms', function (Blueprint $table): void {
                $table->string('thumbnail');
            });
        }

        Schema::create('room_gallery', function (Blueprint $table): void {
            $table->id();
            $table->integer('room_id');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_gallery');
    }
};
