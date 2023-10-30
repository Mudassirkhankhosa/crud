<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          User::create([
            'name' => 'Mudassir',
            'email' => 'mudassirkhan46@email.com',
            'password' => Hash::make('your_password'),
        ]);

  User::create([
            'name' => 'Ahmed',
            'email' => 'ahmedkhan@email.com',
            'password' => Hash::make('your_password'),
        ]);

  User::create([
            'name' => 'Ali',
            'email' => 'alikhan@email.com',
            'password' => Hash::make('your_password'),
        ]);
    User::create([
            'name' => 'Yasir',
            'email' => 'yasirkhan@email.com',
            'password' => Hash::make('your_password'),
        ]);



    }
}
