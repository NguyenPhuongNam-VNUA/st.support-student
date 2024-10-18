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
        Schema::create('accommodation_requests', function (Blueprint $table): void {
            $table->id();
            $table->integer('student_id');
            $table->enum('request_status', array_map(fn ($status) => $status->value, StatusRequest::cases()))
                ->default(StatusRequest::Pending->value);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodation_requests');
    }
};
