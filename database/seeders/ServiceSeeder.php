<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['title' => 'Web App Development', 'slug' => 'web-app-development', 'description' => 'Custom web applications built with modern tools.', 'icon' => 'globe'],
            ['title' => 'Mobile App Development', 'slug' => 'mobile-app-development', 'description' => 'Cross-platform native and hybrid apps.', 'icon' => 'smartphone'],
            ['title' => 'UI/UX Design', 'slug' => 'ui-ux-design', 'description' => 'User-centered design tailored for business needs.', 'icon' => 'pen-tool'],
        ];

        foreach ($services as $svc) {
            \App\Models\Service::create($svc);
        }
    }
}
