<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = [
            [
                'name' => 'Chef Marco Rossi',
                'email' => 'marco@elitepizza.com',
                'phone' => '+1 (555) 123-4567',
                'specialty' => 'Traditional Italian Pizza',
                'experience_years' => 15,
                'bio' => 'Chef Marco is a master of traditional Italian pizza-making with over 15 years of experience. He learned his craft in Naples, Italy, and brings authentic techniques to our classes.',
                'photo_url' => 'https://via.placeholder.com/200x200?text=Chef+Marco'
            ],
            [
                'name' => 'Chef Sofia Garcia',
                'email' => 'sofia@elitepizza.com',
                'phone' => '+1 (555) 234-5678',
                'specialty' => 'Modern Pizza Innovation',
                'experience_years' => 8,
                'bio' => 'Chef Sofia specializes in creative and innovative pizza recipes, combining traditional techniques with modern flavors and ingredients.',
                'photo_url' => 'https://via.placeholder.com/200x200?text=Chef+Sofia'
            ],
            [
                'name' => 'Chef James Wilson',
                'email' => 'james@elitepizza.com',
                'phone' => '+1 (555) 345-6789',
                'specialty' => 'Gluten-Free & Healthy Options',
                'experience_years' => 6,
                'bio' => 'Chef James is our expert on healthy and gluten-free pizza alternatives. He focuses on creating delicious pizzas that everyone can enjoy.',
                'photo_url' => 'https://via.placeholder.com/200x200?text=Chef+James'
            ],
            [
                'name' => 'Chef Anna Chen',
                'email' => 'anna@elitepizza.com',
                'phone' => '+1 (555) 456-7890',
                'specialty' => 'Asian Fusion Pizza',
                'experience_years' => 10,
                'bio' => 'Chef Anna brings her Asian culinary expertise to pizza, creating unique fusion dishes that blend traditional pizza with Asian flavors.',
                'photo_url' => 'https://via.placeholder.com/200x200?text=Chef+Anna'
            ]
        ];

        foreach ($instructors as $instructor) {
            Instructor::create($instructor);
        }
    }
}
