<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PortfolioProject::create([
            'project_category_id' => 1,
            'title' => 'E-Commerce Platform',
            'slug' => 'e-commerce-platform',
            'description' => 'A scalable multi-vendor e-commerce web platform.',
            'image' => null,
            'tech_stack' => json_encode(['Laravel', 'Vue.js', 'MySQL']),
            'is_featured' => true,
        ]);

        \App\Models\PortfolioProject::create([
            'project_category_id' => 2,
            'title' => 'Fitness Tracker App',
            'slug' => 'fitness-tracker-app',
            'description' => 'A native mobile application for tracking workouts.',
            'image' => null,
            'tech_stack' => json_encode(['Flutter', 'Firebase']),
            'is_featured' => true,
        ]);
    }
}
