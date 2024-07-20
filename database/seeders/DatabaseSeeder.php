<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Pro Gety',
            'email' => 'admin@carhire.com',
            'password' => Hash::make('admin'),
            'address' => '123 Kuwadzana Extension, Harare, Zimbabwe',
            'gender' => 'Male',
            'mobile' => '263-456-7890',
            'id_number' => '12-345671-H-89',
            'role' => 'administrator'
        ]);
    }
}
