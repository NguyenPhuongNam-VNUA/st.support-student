<?php

use App\Enums\HealthRequest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('health_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('doctor_id');
            $table->text('issue_description');
            $table->enum('status', array_map(fn($status) => $status->value, HealthRequest::cases()))
                ->default(HealthRequest::Pending->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_requests');
    }
};
