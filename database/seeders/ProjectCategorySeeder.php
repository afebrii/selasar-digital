<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Web Development', 'slug' => 'web-development'],
            ['name' => 'Mobile App', 'slug' => 'mobile-app'],
            ['name' => 'UI/UX Design', 'slug' => 'ui-ux-design'],
        ];

        foreach ($categories as $cat) {
            \App\Models\ProjectCategory::create($cat);
        }
    }
}
