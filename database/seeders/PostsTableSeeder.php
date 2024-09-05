<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for posts
        Post::create([
            'title' => 'Laravel Basics',
            'content' => 'This is an introductory post about Laravel basics.',
            'author_id' => 1, // Ensure this ID exists in the users table
            'status' => 'Published',
            'google_form_link' => 'http://example.com/form',
        ]);

        Post::create([
            'title' => 'Advanced Laravel',
            'content' => 'This post covers advanced topics in Laravel.',
            'author_id' => 2, // Ensure this ID exists in the users table
            'status' => 'Draft',
            'google_form_link' => 'http://example.com/form',
        ]);
    }
}
