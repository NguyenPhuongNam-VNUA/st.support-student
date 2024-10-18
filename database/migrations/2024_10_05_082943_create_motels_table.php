<?php

declare(strict_types=1);

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
        Schema::create('motels', function (Blueprint $table): void {
            $table->id();
            $table->string('owner_name');
            $table->string('owner_phoneNumber');
            $table->string('address');
            $table->integer('total_rooms');
            $table->integer('available_rooms');
            $table->string('thumbnail');
            $table->text('description');
            $table->enum('status', array_map(fn ($status) => $status->value, StatusRequest::cases()))
                ->default(StatusRequest::Pending->value);
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motels');
    }
};
