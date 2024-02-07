<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $users = [
            ["name" => "admin", "email" => "admin123@gmail.com", "password" => bcrypt("admin123"), "role" => "admin"],
            ["name" => "user", "email" => "userpublic@gmail.com", "password" => bcrypt("useruser"), "role" => "user"],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
