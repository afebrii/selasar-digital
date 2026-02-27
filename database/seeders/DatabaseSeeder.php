<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Setup Admin User dengan updateOrCreate agar tidak duplikat saat re-seed
        User::updateOrCreate(
            ['email' => 'admin@selasardigital.com'], // Identifier unik
            [
                'name' => 'Admin Selasar',
                'password' => Hash::make('*20*Afebri'), // Ganti dengan password aman
                'email_verified_at' => now(),
            ]
        );

        // 2. Memanggil seeder lainnya secara berurutan
        $this->call([
            ServiceSeeder::class,
            ProjectCategorySeeder::class,
            PortfolioProjectSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
