<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            // Rename existing fields
            $table->renameColumn('title', 'title_en');
            $table->renameColumn('short_description', 'short_description_en');
            $table->renameColumn('description', 'description_en');

            // Add Arabic versions
            $table->string('title_ar')->nullable()->after('title_en');
            $table->string('sub_title_ar')->nullable()->after('sub_title');
            $table->text('short_description_ar')->nullable()->after('short_description_en');
            $table->longText('description_ar')->nullable()->after('description_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            // Rename back the original fields
            $table->renameColumn('title_en', 'title');
            $table->renameColumn('short_description_en', 'short_description');
            $table->renameColumn('description_en', 'description');

            // Drop Arabic columns
            $table->dropColumn('title_ar');
            $table->dropColumn('sub_title_ar');
            $table->dropColumn('short_description_ar');
            $table->dropColumn('description_ar');
        });
    }
};
