<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test user one',
            'email' => 'user@test.test',
            'password' => bcrypt('123456'),

        ]);

        User::create([
            'name' => 'test2',
            'email' => 'user2@test.test',
            'password' => bcrypt('123456'),

        ]);

        User::create([
            'name' => 'test3',
            'email' => 'user3@test.test',
            'password' => bcrypt('123456'),

        ]);
    }
}
