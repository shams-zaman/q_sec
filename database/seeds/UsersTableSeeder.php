<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Admin',
            // 'username' => 'admin',
            'email' => 'a@a.com',
            'password' => bcrypt('68686868'),
        ]);
    }
}
// $users = [
//     [
//         'id'             => 1,
//         'name'           => 'Admin',
//         'email'          => 'admin@admin.com',
//         'password'       => '68686868',
//         'remember_token' => null,
//     ],
// ];
