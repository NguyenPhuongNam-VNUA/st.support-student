<?php

use App\Enums\Deliver;
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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('service_category_id');
            $table->string('name');
            $table->text('description');
            $table->string('thumbnail');
            $table->string('location');
            $table->string('phone_number');
            $table->string('owner_name');
            $table->string('slug');
            $table->enum('isShip', array_map(fn ($status) => $status->value, Deliver::cases()))
                ->default(Deliver::No->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
