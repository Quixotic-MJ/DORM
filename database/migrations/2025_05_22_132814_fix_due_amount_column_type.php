<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // For PostgreSQL, we need to check if the column is already numeric
        if (DB::connection()->getDriverName() === 'pgsql') {
            // Check the current data type of the due_amount column
            $columnType = DB::select("
                SELECT data_type
                FROM information_schema.columns
                WHERE table_name = 'tenants' AND column_name = 'due_amount'
            ")[0]->data_type;

            // Only proceed if the column is not already numeric
            if ($columnType !== 'numeric') {
                // First, convert any non-numeric values to 0 to avoid conversion errors
                DB::statement("UPDATE tenants SET due_amount = '0' WHERE due_amount NOT SIMILAR TO '[0-9]+(\.[0-9]+)?'");

                // Then alter the column type to numeric
                DB::statement('ALTER TABLE tenants ALTER COLUMN due_amount TYPE numeric(10,2) USING (due_amount::numeric)');
            }
        } else {
            // For other database systems, use the standard Laravel approach
            Schema::table('tenants', function (Blueprint $table) {
                $table->decimal('due_amount', 10, 2)->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // This is a one-way migration as converting back to string would be safe
        // but not necessary for the application functionality
    }
};
