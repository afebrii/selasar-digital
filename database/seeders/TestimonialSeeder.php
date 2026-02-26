<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Testimonial::create([
            'client_name' => 'John Doe',
            'client_company' => 'Tech Innovations Inc.',
            'content' => 'Selasar Digital delivered our SaaS platform on time and with incredible quality. Highly recommended!',
            'is_approved' => true,
        ]);

        \App\Models\Testimonial::create([
            'client_name' => 'Jane Smith',
            'client_company' => 'Startup Solutions',
            'content' => 'The UI/UX design team truly understood our vision and crafted an intuitive mobile app.',
            'is_approved' => true,
        ]);
    }
}
