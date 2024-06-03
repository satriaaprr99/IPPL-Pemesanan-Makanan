<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = ["Eksekutif", "Media Promotion", "Kitchen Head", "Waiters", "Kasir"];
        foreach ($roles as $key => $value) {
            $data = new Role;
            $data->nama_role = $value;
            $data->save();
        }

        $user = [
            [
                "name" => 'Fadlul Hafiizh',
                "role_id" => 1,
                "email" => "muh.hafiizh56@gmail.com",
                "password" => bcrypt('secretpass')
            ],
            [
                "name" => 'Abdullah Hafidz',
                "role_id" => 1,
                "email" => "abdul@gmail.com",
                "password" => bcrypt('secretpass')
            ],
            [
                "name" => 'Reza',
                "role_id" => 2,
                "email" => "mediapromot@gmail.com",
                "password" => bcrypt('secretpass')
            ],
            [
                "name" => 'Refi',
                "role_id" => 3,
                "email" => "kitchen@gmail.com",
                "password" => bcrypt('secretpass')
            ],
            [
                "name" => 'Satria',
                "role_id" => 4,
                "email" => "waiters@gmail.com",
                "password" => bcrypt('secretpass')
            ],
            [
                "name" => 'Putri',
                "role_id" => 5,
                "email" => "Kasir@gmail.com",
                "password" => bcrypt('secretpass')
            ],
        ];

        foreach ($user as $key => $item) {
            $data = new User;
            $data->name = $item['name'];
            $data->role_id = $item['role_id'];
            $data->email = $item['email'];
            $data->password = $item['password'];
            $data->save();
        }
    }
}
