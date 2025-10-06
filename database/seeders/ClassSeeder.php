<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassModel;
use App\Models\Instructor;
use Carbon\Carbon;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all instructors
        $instructors = Instructor::all();
        
        if ($instructors->isEmpty()) {
            $this->command->info('No instructors found. Please run InstructorSeeder first.');
            return;
        }

        $classes = [
            [
                'title' => 'Classic Margherita Masterclass',
                'type' => 'beginner',
                'description' => 'Learn the authentic way to make the perfect Margherita pizza with fresh mozzarella, San Marzano tomatoes, and basil.',
                'date' => now()->addDays(2)->format('Y-m-d'),
                'start_time' => '14:00:00',
                'duration' => 3,
                'max_students' => 12,
                'instructor_id' => $instructors->where('name', 'Chef Marco Rossi')->first()->id,
                'price' => 85.00,
                'status' => 'available'
            ],
            [
                'title' => 'Neapolitan Pizza Techniques',
                'type' => 'intermediate',
                'description' => 'Master the traditional Neapolitan pizza-making techniques including dough fermentation, hand-stretching, and wood-fire cooking.',
                'date' => now()->addDays(5)->format('Y-m-d'),
                'start_time' => '18:00:00',
                'duration' => 4,
                'max_students' => 10,
                'instructor_id' => $instructors->where('name', 'Chef Marco Rossi')->first()->id,
                'price' => 120.00,
                'status' => 'available'
            ],
            [
                'title' => 'Creative Fusion Pizza Workshop',
                'type' => 'advanced',
                'description' => 'Explore innovative flavor combinations and create your own unique fusion pizzas with international influences.',
                'date' => now()->addDays(8)->format('Y-m-d'),
                'start_time' => '16:00:00',
                'duration' => 3.5,
                'max_students' => 8,
                'instructor_id' => $instructors->where('name', 'Chef Sofia Garcia')->first()->id,
                'price' => 150.00,
                'status' => 'available'
            ],
            [
                'title' => 'Gluten-Free Pizza Essentials',
                'type' => 'beginner',
                'description' => 'Learn to make delicious gluten-free pizza dough that tastes amazing and has the perfect texture.',
                'date' => now()->addDays(3)->format('Y-m-d'),
                'start_time' => '10:00:00',
                'duration' => 2.5,
                'max_students' => 8,
                'instructor_id' => $instructors->where('name', 'Chef James Wilson')->first()->id,
                'price' => 95.00,
                'status' => 'available'
            ],
            [
                'title' => 'Asian-Inspired Pizza Creations',
                'type' => 'intermediate',
                'description' => 'Discover how to incorporate Asian flavors and ingredients into traditional pizza recipes.',
                'date' => now()->addDays(7)->format('Y-m-d'),
                'start_time' => '14:00:00',
                'duration' => 3,
                'max_students' => 10,
                'instructor_id' => $instructors->where('name', 'Chef Anna Chen')->first()->id,
                'price' => 110.00,
                'status' => 'available'
            ],
            [
                'title' => 'Weekend Family Pizza Party',
                'type' => 'beginner',
                'description' => 'A fun, hands-on class perfect for families to learn pizza-making together and create memories.',
                'date' => now()->addDays(10)->format('Y-m-d'),
                'start_time' => '11:00:00',
                'duration' => 2,
                'max_students' => 15,
                'instructor_id' => $instructors->random()->id,
                'price' => 75.00,
                'status' => 'available'
            ],
            [
                'title' => 'Artisan Bread Pizza Making',
                'type' => 'intermediate',
                'description' => 'Learn to make sourdough and artisan bread bases for pizzas that will impress your friends and family.',
                'date' => now()->addDays(12)->format('Y-m-d'),
                'start_time' => '13:00:00',
                'duration' => 4,
                'max_students' => 6,
                'instructor_id' => $instructors->where('name', 'Chef Sofia Garcia')->first()->id,
                'price' => 135.00,
                'status' => 'available'
            ]
        ];

        foreach ($classes as $class) {
            ClassModel::create($class);
        }
    }
}
