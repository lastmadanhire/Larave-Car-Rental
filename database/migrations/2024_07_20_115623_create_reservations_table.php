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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->foreignId('rate_id')->constrained('rates')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('rental_period');
            $table->enum('status', ['approved', 'disapproved', 'returned']);
            $table->integer('starting_mileage');
            $table->integer('ending_mileage')->nullable();
            $table->decimal('initial_payment', 8, 2);
            $table->decimal('total_bill', 8, 2)->nullable();
            $table->decimal('balance_due', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
