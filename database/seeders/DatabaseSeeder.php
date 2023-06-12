<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Table;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);

        Booking::factory()->count(10)->hasAttached(Table::factory()->count(3))->for($user)->create();
    }
}
