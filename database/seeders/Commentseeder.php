<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class Commentseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Comment::truncate();

        // Seed sample comments
        Comment::create([
            'comment' => 'This is the first comment on post 1.',
            'user_id' => 1, // Replace with the user ID associated with this comment
            'post_id' => 7, // Replace with the post ID this comment belongs to
        ]);

        Comment::create([
            'comment' => 'A comment on post 2.',
            'user_id' => 2, // Replace with the user ID associated with this comment
            'post_id' => 8, // Replace with the post ID this comment belongs to
        ]);
         Comment::create([
            'comment' => 'A good comment on post 2.',
            'user_id' => 2, // Replace with the user ID associated with this comment
            'post_id' => 8, // Replace with the post ID this comment belongs to
        ]);
          Comment::create([
            'comment' => 'A best blogs  on post 2.',
            'user_id' => 2, // Replace with the user ID associated with this comment
            'post_id' => 8, // Replace with the post ID this comment belongs to
        ]);
        Comment::create([
            'comment' => 'A best blogs  on post learn.',
            'user_id' => 2, // Replace with the user ID associated with this comment
            'post_id' => 11, // Replace with the post ID this comment belongs to
        ]);
           Comment::create([
            'comment' => 'A best blogs  on post Android.',
            'user_id' => 6, // Replace with the user ID associated with this comment
            'post_id' => 12, // Replace with the post ID this comment belongs to
        ]);
             Comment::create([
            'comment' => 'A best blogs  on post web.',
            'user_id' => 7, // Replace with the user ID associated with this comment
            'post_id' => 13, // Replace with the post ID this comment belongs to
        ]);
               Comment::create([
            'comment' => 'A best blogs  on post web.',
            'user_id' => 8, // Replace with the user ID associated with this comment
            'post_id' => 14, // Replace with the post ID this comment belongs to
        ]);
                   Comment::create([
            'comment' => 'A best blogs  on post web.',
            'user_id' => 8, // Replace with the user ID associated with this comment
            'post_id' => 15, // Replace with the post ID this comment belongs to
        ]);

    }
}
