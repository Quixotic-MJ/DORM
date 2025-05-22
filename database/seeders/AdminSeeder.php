<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample admin accounts
        Admin::create([
            'admin_id' => 'admin1',
            'password' => Hash::make('admin123'),
        ]);

        Admin::create([
            'admin_id' => 'admin2',
            'password' => Hash::make('admin456'),
        ]);

        Admin::create([
            'admin_id' => 'superadmin',
            'password' => Hash::make('super123'),
        ]);
    }
}
