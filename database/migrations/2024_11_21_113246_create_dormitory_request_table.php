<?php

declare(strict_types=1);

use App\Enums\Gender;
use App\Enums\StatusRequest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dormitory_request', function (Blueprint $table): void {
            $table->id();
            $table->integer('room_id');
            $table->string('name');
            $table->string('code');
            $table->string('phone');
            $table->date('bod');
            $table->enum('gender', array_map(fn ($gender) => $gender->value, Gender::cases()));
            $table->text('note')->nullable();
            $table->enum('status', array_map(fn ($status) => $status->value, StatusRequest::cases()))->default(StatusRequest::Pending);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dormitory_request');
    }
};
