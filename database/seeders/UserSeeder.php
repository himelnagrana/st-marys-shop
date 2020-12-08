<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultUsers = [
            ['name' => 'Sepehr', 'email' => 'seph@socialsweethearts.com', 'password' => bcrypt('123456')],
            ['name' => 'Ilias', 'email' => 'ilias@socialsweethearts.com', 'password' => bcrypt('123456')],
            ['name' => 'Mathias', 'email' => 'mathias@socialsweethearts.com', 'password' => bcrypt('123456')],
            ['name' => 'Ruth', 'email' => 'ruth@socialsweethearts.com', 'password' => bcrypt('123456')],
            ['name' => 'Himel', 'email' => 'himel@socialsweethearts.com', 'password' => bcrypt('123456')]
        ];

        foreach($defaultUsers as $user) {
            DB::table('users')->insert($user);
        }
    }
}
