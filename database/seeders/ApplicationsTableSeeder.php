<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for applications
        Application::create([
            'student_id' => 4, // Assuming the ID 4 corresponds to an existing user
            'job_posting_id' => 1, // Assuming the ID 1 corresponds to an existing job posting
            'status' => 'Applied',
        ]);

        Application::create([
            'student_id' => 4,
            'job_posting_id' => 2,
            'status' => 'Shortlisted',
        ]);
    }
}
