<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\Tenant;
use Carbon\Carbon;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the first tenant (or create one if none exists)
        $tenant = Tenant::first();

        if (!$tenant) {
            // Create a tenant if none exists
            $tenant = Tenant::create([
                'tenant_id' => 'tenant1',
                'tenant_password' => bcrypt('password'),
                'tenant_name' => 'John Doe',
                'tenant_contact' => '123-456-7890',
                'total_occupants' => 1,
                'subscriptions' => 'regular',
                'room_number' => '101',
                'lease_end' => '2025-12-31',
                'total_paid' => 1500.00,
                'due_amount' => 500.00,
                'status' => 'active'
            ]);
        }

        // Create payments with different dates to test filtering

        // Today
        Payment::create([
            'tenant_id' => $tenant->id,
            'payment_date' => Carbon::today(),
            'amount' => 300.00,
            'due_amount' => 500.00,
            'status' => 'partially_paid'
        ]);

        // Yesterday
        Payment::create([
            'tenant_id' => $tenant->id,
            'payment_date' => Carbon::yesterday(),
            'amount' => 200.00,
            'due_amount' => 500.00,
            'status' => 'partially_paid'
        ]);

        // Last week
        Payment::create([
            'tenant_id' => $tenant->id,
            'payment_date' => Carbon::now()->subDays(6),
            'amount' => 500.00,
            'due_amount' => 500.00,
            'status' => 'paid'
        ]);

        // Last month
        Payment::create([
            'tenant_id' => $tenant->id,
            'payment_date' => Carbon::now()->subMonth(),
            'amount' => 500.00,
            'due_amount' => 500.00,
            'status' => 'paid'
        ]);

        // 3 months ago
        Payment::create([
            'tenant_id' => $tenant->id,
            'payment_date' => Carbon::now()->subMonths(3),
            'amount' => 500.00,
            'due_amount' => 500.00,
            'status' => 'paid'
        ]);
    }
}
