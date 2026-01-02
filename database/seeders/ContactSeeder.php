<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Sample User',
            'email' => 'sample@technonika.test',
            'subject' => 'Test contact',
            'message' => 'This is a seeded contact message for development.',
            'phone' => '+1 (555) 000-0000',
        ]);
    }
}
