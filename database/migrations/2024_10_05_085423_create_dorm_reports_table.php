<?php

use App\Enums\StatusReport;
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
        Schema::create('dorm_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('dorm_id');
            $table->string('issue_type');
            $table->text('description');
            $table->enum('status', array_map(fn($status) => $status->value, StatusReport::cases()))
                ->default(StatusReport::Pending->value);
            $table->string('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dorm_reports');
    }
};
