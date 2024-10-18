<?php

declare(strict_types=1);

use App\Enums\StatusRoom;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->integer('dormitory_id');
            $table->integer('capacity'); //sức chứa
            $table->integer('student_id');
            $table->string('slug');
            $table->enum('status', array_map(fn ($status) => $status->value, StatusRoom::cases()))
                ->default(StatusRoom::Empty->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
