<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Htet Aung Khant',
                'email' => 'htetaungkhant@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Htet Shine',
                'email' => 'htetshine@gmail.com',
                'password' => bcrypt('password'),
            ]
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
