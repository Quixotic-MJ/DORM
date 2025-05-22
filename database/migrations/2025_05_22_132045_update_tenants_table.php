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
        // Rename lease-end to lease_end
        Schema::table('tenants', function (Blueprint $table) {
            $table->renameColumn('lease-end', 'lease_end');
        });

        // For PostgreSQL, we need to use raw SQL to alter column types
        if (DB::connection()->getDriverName() === 'pgsql') {
            // Convert any non-numeric values to 0 to avoid conversion errors
            DB::statement('UPDATE tenants SET total_paid = \'0\' WHERE total_paid !~ \'^[0-9]+(\.[0-9]+)?$\'');
            DB::statement('UPDATE tenants SET due_amount = \'0\' WHERE due_amount !~ \'^[0-9]+(\.[0-9]+)?$\'');
            DB::statement('UPDATE tenants SET total_occupants = \'0\' WHERE total_occupants !~ \'^[0-9]+$\'');

            // Alter column types using PostgreSQL syntax
            DB::statement('ALTER TABLE tenants ALTER COLUMN total_paid TYPE numeric(10,2) USING (total_paid::numeric)');
            DB::statement('ALTER TABLE tenants ALTER COLUMN due_amount TYPE numeric(10,2) USING (due_amount::numeric)');
            DB::statement('ALTER TABLE tenants ALTER COLUMN total_occupants TYPE integer USING (total_occupants::integer)');
        } else {
            // For other database systems, use the standard Laravel approach
            Schema::table('tenants', function (Blueprint $table) {
                $table->decimal('total_paid', 10, 2)->change();
                $table->decimal('due_amount', 10, 2)->change();
                $table->integer('total_occupants')->change();
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
