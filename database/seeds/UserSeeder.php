<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'User1',
            'email' => 'u1@test.de',
            'password' => bcrypt('password'),
        ])->assignRole('moderator');

        User::create([
            'name' => 'User2',
            'email' => 'u2@test.de',
            'password' => bcrypt('password'),
        ]);
    }
}
