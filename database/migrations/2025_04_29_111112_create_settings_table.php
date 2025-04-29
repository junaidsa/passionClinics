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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('year_experiencee')->nullable();
            $table->text('awards')->nullable();
            $table->text('happy_clients')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
