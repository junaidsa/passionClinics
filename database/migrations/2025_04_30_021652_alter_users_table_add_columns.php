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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('service_id')->nullable()->constrained('services')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('experience')->nullable();
            $table->text('about')->nullable();
            $table->text('personals_info')->nullable();
            $table->string('x_url')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('ins_url')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
