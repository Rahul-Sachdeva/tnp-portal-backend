<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GoogleFormRecord;

class GoogleFormRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for Google form records
        GoogleFormRecord::create([
            'form_data' => json_encode(['field1' => 'value1', 'field2' => 'value2']),
            'student_id' => 4,
            'is_valid' => true,
        ]);

        GoogleFormRecord::create([
            'form_data' => json_encode(['field1' => 'value1', 'field2' => 'value2']),
            'student_id' => 4,
            'is_valid' => false,
        ]);
    }
}
