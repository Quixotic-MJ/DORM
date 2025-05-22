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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_id');
            $table->string('tenant_password');
            $table->string('tenant_name');
            $table->string('tenant_contact');
            $table->string('total_occupants');
            $table->string('subscriptions');
            $table->string('room_number');
            $table->string('lease-end');
            $table->string('total_paid');
            $table->string('due_amount');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
