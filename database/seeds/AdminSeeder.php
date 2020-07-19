<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'super admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
