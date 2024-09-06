<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyProfile;

class CompanyProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for company profiles
        CompanyProfile::create([
            'company_name' => 'Tech Innovators Inc.',
            'description' => 'A leading company in tech innovation.',
            'website' => 'http://techinnovators.com',
            'contact_email' => 'contact@techinnovators.com',
            'contact_phone' => '123-456-7890',
            'logo' => 'logo-tech-innovators.png',
        ]);

        CompanyProfile::create([
            'company_name' => 'Creative Solutions LLC',
            'description' => 'Providing creative solutions for modern problems.',
            'website' => 'http://creativesolutions.com',
            'contact_email' => 'info@creativesolutions.com',
            'contact_phone' => '098-765-4321',
            'logo' => 'logo-creative-solutions.png',
        ]);
    }
}
