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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained();
            $table->foreignId('user_id')->constrained('users'); // assuming staff are users
            $table->foreignId('customer_id')->constrained('customers'); // assuming customers are users
            $table->foreignId('location_id')->nullable()->constrained('locations'); // optional: may relate to locations table
            $table->enum('appointment_status', ['pending', 'confirmed', 'cancelled', 'completed','emergency'])->default('pending');
            $table->enum('payment_status', ['unpaid', 'paid', 'refunded'])->default('unpaid');

            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
