<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'sequence' => 1,
                'data' => [
                    'name' => 'Rashmi Ingle',
                    'company' => 'Eduonix',
                    'message' => 'Don’t wait another second to connect with Techonika Solutions. Their ability to test and adjust strategies in real time is impressive.',
                    'verified' => true,
                ],
            ],
            [
                'sequence' => 2,
                'data' => [
                    'name' => 'Dr Vilas Chakor',
                    'company' => 'Dr Chakor Clinic',
                    'message' => 'Simply put, the best and most reliable services. Designs, communication, understanding, and effort — everything is handled professionally.',
                    'verified' => true,
                ],
            ],
            [
                'sequence' => 3,
                'data' => [
                    'name' => 'Aayush Bajaj',
                    'company' => 'A R Finance Room',
                    'message' => 'Prateek has a strong command over his work and has been very professional throughout.',
                    'verified' => true,
                ],
            ],
            [
                'sequence' => 4,
                'data' => [
                    'name' => 'Biren Matiyali',
                    'company' => 'H M Foods',
                    'message' => 'Very professional. Very responsive. Very qualified. Worth giving them a try without hesitation.',
                    'verified' => true,
                ],
            ],
            [
                'sequence' => 5,
                'data' => [
                    'name' => 'Manisha',
                    'company' => 'Saffron Cuisine',
                    'message' => 'Techonika perfectly combines analytical thinking with creativity. Highly recommended.',
                    'verified' => true,
                ],
            ],
            [
                'sequence' => 6,
                'data' => [
                    'name' => 'Tao Rima Bhatt',
                    'company' => 'RuralLinks',
                    'message' => 'Great quality work at affordable prices. Open to feedback and changes.',
                    'verified' => true,
                ],
            ],
        ];

        foreach ($items as $item) {
            Testimonial::create($item);
        }
    }
}
