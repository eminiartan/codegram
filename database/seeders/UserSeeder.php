<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Artan Emini',
            'username' => 'chaggy',
            'email' => 'chaggy@test.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\User::factory(10)->create();
    }
}
