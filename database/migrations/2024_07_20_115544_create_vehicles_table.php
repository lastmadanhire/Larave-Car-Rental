<?php

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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('seats');
            $table->string('registration_number')->unique();
            $table->foreignId('vehicle_type_id')->constrained('vehicle_types')->onDelete('cascade');
            $table->foreignId('vehicle_fuel_type_id')->constrained('vehicle_fuel_types')->onDelete('cascade');
            $table->foreignId('vehicle_gear_type_id')->constrained('vehicle_gear_types')->onDelete('cascade');
            $table->foreignId('rate_id')->constrained('rates')->onDelete('cascade');
            $table->foreignId('model_id')->constrained('car_models')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->integer('opening_mileage');
            $table->text('condition_details')->nullable();
            $table->text('description')->nullable();
            $table->string('colour')->nullable();
            $table->string('image_uri')->nullable();
            $table->enum('status', ['available', 'rented', 'maintenance']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
