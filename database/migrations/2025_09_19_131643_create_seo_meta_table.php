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
        Schema::create('seo_meta', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title_en')->nullable();
            $table->string('meta_title_ar')->nullable();
            $table->text('keywords_en')->nullable();
            $table->text('keywords_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->string('type')->nullable();
            $table->string('page_type')->nullable();
            $table->unsignedBigInteger('page_id')->nullable();
            $table->boolean('is_parent')->default(0);
            $table->string('lang', 10)->nullable();
            $table->string('slug')->unique();
            $table->string('robots')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_meta');
    }
};
