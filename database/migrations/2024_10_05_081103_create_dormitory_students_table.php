<?php

declare(strict_types=1);

use App\Enums\Gender;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_students', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->enum('gender', array_map(fn ($gender) => $gender->value, Gender::cases()));
            $table->string('email');
            $table->date('bod');
            $table->integer('room_id');
            $table->string('phone_number');
            $table->string('citizen_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_students');
    }
};
