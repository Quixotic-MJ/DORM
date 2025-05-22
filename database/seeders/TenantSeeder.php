<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;
use Illuminate\Support\Facades\Hash;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample tenant accounts
        Tenant::create([
            'tenant_id' => 'tenant1',
            'tenant_password' => Hash::make('tenant123'),
            'tenant_name' => 'John Doe',
            'tenant_contact' => '123-456-7890',
            'total_occupants' => 2,
            'subscriptions' => 'Basic',
            'room_number' => '101',
            'lease-end' => '2024-12-31',
            'total_paid' => 5000,
            'due_amount' => 1000,
            'status' => 'Active'
        ]);

        Tenant::create([
            'tenant_id' => 'tenant2',
            'tenant_password' => Hash::make('tenant456'),
            'tenant_name' => 'Jane Smith',
            'tenant_contact' => '987-654-3210',
            'total_occupants' => 1,
            'subscriptions' => 'Premium',
            'room_number' => '202',
            'lease-end' => '2024-10-15',
            'total_paid' => 7500,
            'due_amount' => 0,
            'status' => 'Active'
        ]);

        Tenant::create([
            'tenant_id' => 'tenant3',
            'tenant_password' => Hash::make('tenant789'),
            'tenant_name' => 'Robert Johnson',
            'tenant_contact' => '555-123-4567',
            'total_occupants' => 3,
            'subscriptions' => 'Standard',
            'room_number' => '305',
            'lease-end' => '2025-01-20',
            'total_paid' => 3000,
            'due_amount' => 2000,
            'status' => 'Active'
        ]);
    }
}
