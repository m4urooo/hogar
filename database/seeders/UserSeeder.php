<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1= User::create([
            'name' => 'Doris',
            'email' => 'doris@gmail.com',
            'password' => bcrypt('password'),
            'id_hogar' => '1'
        ]);


    }
}
