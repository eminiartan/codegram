<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);

        $user->profile()->create([
            'title' => 'My profile',
            'description' => 'This is my profile',
            'url' => 'https://www.youtube.com/watch?v=ImtZ5yENzgE&t=3697s',
        ]);

        $users = User::where('id', '!=', 1)->get();

        foreach ($users as $user) {
            Profile::factory(1)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
