<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Seed posts related to training and placement activities
        $posts = [
            [
                'title' => 'Campus Recruitment Training',
                'content' => 'A comprehensive training session on aptitude, reasoning, and communication skills for campus placements.',
                'author_id' => 1, // Ensure this ID exists in the users table
                'status' => 'Published',
                'google_form_link' => 'http://example.com/form1',
            ],
            [
                'title' => 'Company Pre-Placement Talk',
                'content' => 'An insightful session by XYZ Company covering company profile and job opportunities.',
                'author_id' => 2,
                'status' => 'Published',
                'google_form_link' => 'http://example.com/form2',
            ],
            [
                'title' => 'Mock Interviews for Final Year Students',
                'content' => 'Mock interviews organized to prepare final year students for upcoming placement drives.',
                'author_id' => 1,
                'status' => 'Published',
                'google_form_link' => 'http://example.com/form3',
            ],
            [
                'title' => 'Resume Building Workshop',
                'content' => 'A workshop to help students craft professional resumes that stand out during placements.',
                'author_id' => 1,
                'status' => 'Draft',
                'google_form_link' => 'http://example.com/form4',
            ],
            [
                'title' => 'Soft Skills Development Program',
                'content' => 'A special program focused on improving communication, presentation, and negotiation skills.',
                'author_id' => 4,
                'status' => 'Published',
                'google_form_link' => 'http://example.com/form5',
            ],
            [
                'title' => 'Placement Drive for Engineering Students',
                'content' => 'XYZ Company is conducting a placement drive for engineering graduates.',
                'author_id' => 2,
                'status' => 'Draft',
                'google_form_link' => 'http://example.com/form6',
            ],
        ];

        // Insert the posts into the database
        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
