<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for notifications
        Notification::create([
            'user_id' => 1, // Assuming the ID 1 corresponds to an existing user
            'message' => 'You have a new job application.',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 2,
            'message' => 'Your post has been published.',
            'is_read' => true,
        ]);
    }
}
