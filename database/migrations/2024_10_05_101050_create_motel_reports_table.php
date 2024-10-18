<?php

declare(strict_types=1);

use App\Enums\StatusReport;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motel_reports', function (Blueprint $table): void {
            $table->id();
            $table->integer('student_id');
            $table->integer('motel_id');
            $table->string('issue_type');
            $table->text('description');
            $table->enum('status', array_map(fn ($status) => $status->value, StatusReport::cases()))
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
        Schema::dropIfExists('motel_reports');
    }
};
