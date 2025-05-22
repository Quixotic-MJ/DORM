<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample rooms
        Room::create([
            'room_number' => '101',
            'room_type' => 'Student Plan',
            'capacity' => 6,
            'current_occupants' => 1,
            'is_available' => true
        ]);

        Room::create([
            'room_number' => '202',
            'room_type' => 'Regular Plan',
            'capacity' => 4,
            'current_occupants' => 4,
            'is_available' => false
        ]);

        Room::create([
            'room_number' => '305',
            'room_type' => 'Student Plan',
            'capacity' => 6,
            'current_occupants' => 3,
            'is_available' => true
        ]);

        // Create additional available rooms
        for ($i = 1; $i <= 5; $i++) {
            Room::create([
                'room_number' => '40' . $i,
                'room_type' => 'Student Plan',
                'capacity' => 6,
                'current_occupants' => 0,
                'is_available' => true
            ]);
        }
    }
}
