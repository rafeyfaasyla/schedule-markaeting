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
        //admin
        $admin = new \App\Modela\User();
        $admin ->name = "Admin Project";
        $admin ->email = "admin@gmail.com";
        $admin ->password = bcrypt('rahasia');
        $admin ->role = "admin";

        $admin->save();

        $guest = new \App\Modela\User();
        $guest ->name = "guest Project";
        $guest ->email = "guest@gmail.com";
        $guest ->password = bcrypt('user');
        $guest ->role = "guest";

        $guest->save();
        // $admin = User::create([
        //     'name' => 'admin',
        //     'email' =>'admin@gmail.com',
        //     'password' => bcrypt('rahasia'),
        //     'role' => 'admin'
        // ]);

        // $admin->assignRole('admin');

        // $user = User::create([
        //     'name' => 'user',
        //     'email' =>'user@gmail.com',
        //     'password' => bcrypt('guest'),
        //     'role' => 'guest'
        // ]);

        // $user->assignRole('user');
    }
}
