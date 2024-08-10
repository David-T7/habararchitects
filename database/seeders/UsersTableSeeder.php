<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'             => 2,
                'name'           => 'Neud Tesfay',
                'email'          => 'neud@drongo.vip',
                'password'       => bcrypt('12345678'),
                'remember_token' => null,
                'profile_photo_path' => '',
                'username' => "ne\'ud",
                'job_title' => "Developer",
                'location' => "Addis Ababa, Ethiopia",
                'phone_number' => "+251966018311",
                'user_about' => "My name is Neud Tesfay, I designed and developed this website. Hope you like it!",
            ],
            [
                'id'             => 3,
                'name'           => 'Elias Walalign',
                'email'          => 'elias@habararchitects.com',
                'password'       => bcrypt('12345678'),
                'remember_token' => null,
                'profile_photo_path' => '',
                'username' => "admin",
                'job_title' => "CEO",
                'location' => "Addis Ababa, Ethiopia",
                'phone_number' => "+251911566427",
                'user_about' => "My name is Elias and I am the Chief Executive Officer of Habar Architects.",
            ],
        ];

        User::insert($users);
    }
}
