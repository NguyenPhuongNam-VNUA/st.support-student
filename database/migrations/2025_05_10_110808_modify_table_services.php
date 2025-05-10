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
        Schema::table('services', function (Blueprint $table): void {
            $table->enum('status', array_map(fn ($status) => $status->value, StatusRequest::cases()))
                ->default(StatusRequest::Pending->value);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table): void {
            $table->dropColumn('status');
        });
    }
};
