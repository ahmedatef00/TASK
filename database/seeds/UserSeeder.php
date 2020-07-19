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
            'email' => 'userone@test.test',
        ]);

        User::create([
            'name' => 'test user two',
            'email' => 'usertwo@test.test',
        ]);

        User::create([
            'name' => 'test user three',
            'email' => 'userthree@test.test',
        ]);
    }
}
