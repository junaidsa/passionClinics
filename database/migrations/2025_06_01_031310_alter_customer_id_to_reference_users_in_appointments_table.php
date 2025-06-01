<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            // Try to drop foreign key if it exists
            try {
                DB::statement('ALTER TABLE appointments DROP FOREIGN KEY appointments_customer_id_foreign');
            } catch (\Throwable $e) {
                // Foreign key might not exist, ignore error
            }

            // Now, redefine the foreign key referencing users table
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);

            // Optionally revert back to old customers table (if it existed)
            // $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }
};
