<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;



class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Clear the existing records to start with a fresh seed
        // Post::truncate();

        // Get the IDs of existing users
        $userIds = User::all();

        // Seed sample posts with valid user IDs
        Post::create([
            'title' => 'Sample Post 1',
            'content' => 'This is the content of the first sample post.',
            'user_id' => 1 ,
        ]);

        Post::create([
            'title' => 'Sample Post 2',
            'content' => 'This is the content of the second sample post.',
            'user_id' => 2,
        ]);
        Post::create([
            'title' => 'Sample Post 3',
            'content' => 'This is the content of the third sample post.',
            'user_id' => 5,
        ]);
        Post::create([
            'title' => ' Post 4',
            'content' => 'This is the content of the four sample post.',
            'user_id' => 8,
        ]);


    }
}
