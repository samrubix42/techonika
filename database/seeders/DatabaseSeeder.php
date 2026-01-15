<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Role & Permission seeder
        $this->call(\Database\Seeders\RolePermissionSeeder::class);
        // Blog seeder
        $this->call(\Database\Seeders\BlogSeeder::class);
        // Contact seeder
        $this->call(\Database\Seeders\ContactSeeder::class);
        // Portfolio categories
        $this->call(\Database\Seeders\PortfolioCategorySeeder::class);
        $this->call(\Database\Seeders\TestimonialSeeder::class);
    }
}
