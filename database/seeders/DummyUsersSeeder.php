<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'ADMIN'
            ],
            [
                'name' => 'Wawan',
                'email' => 'wawan@gmail.com',
                'gender' => 'male',
                'password' => bcrypt('wawan123'),
                'role' => 'USERS'
            ],
            [
                'name' => 'Santi',
                'email' => 'santi@gmail.com',
                'gender' => 'female',
                'password' => bcrypt('santi123'),
                'role' => 'USERS'
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
