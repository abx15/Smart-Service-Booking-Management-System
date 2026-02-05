<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComprehensiveServiceSeeder extends Seeder
{
    public function run(): void
    {
        // ensuring provider exists
        $provider = User::firstOrCreate(
            ['email' => 'provider@example.com'],
            [
                'name' => 'John Provider',
                'password' => bcrypt('password'),
                'role' => 'worker', // adjusting based on your role system
                'phone' => '1234567890',
            ]
        );

        $categories = [
            'plumbing' => [
                ['name' => 'General Plumbing Repair', 'price' => 80, 'desc' => 'Fixing leaks, taps, and general plumbing issues.'],
                ['name' => 'Drain Cleaning', 'price' => 120, 'desc' => 'Unclogging drains and sewer lines.'],
                ['name' => 'Water Heater Repair', 'price' => 150, 'desc' => 'Repairing or servicing water heaters.'],
            ],
            'cleaning' => [
                ['name' => 'Full House Deep Cleaning', 'price' => 200, 'desc' => 'Complete deep cleaning for your home.'],
                ['name' => 'Sofa Cleaning', 'price' => 50, 'desc' => 'Shampoo and cleaning of 5-seater sofa.'],
                ['name' => 'Bathroom Cleaning', 'price' => 40, 'desc' => 'Deep cleaning and sanitization of bathrooms.'],
            ],
            'electrical' => [
                ['name' => 'Fan Installation', 'price' => 30, 'desc' => 'Installation of ceiling or wall fans.'],
                ['name' => 'Switchboard Repair', 'price' => 25, 'desc' => 'Repairing faulty switches and sockets.'],
                ['name' => 'Full House Wiring Check', 'price' => 100, 'desc' => 'Comprehensive electrical safety check.'],
            ],
            'painting' => [
                ['name' => 'Wall Painting (Per Room)', 'price' => 150, 'desc' => 'Repainting of walls for a standard room.'],
                ['name' => 'Touch-up Painting', 'price' => 80, 'desc' => 'Fixing patches and minor wall damages.'],
            ],
            'moving' => [
                ['name' => 'Local Shifting', 'price' => 300, 'desc' => 'Moving household items within the city.'],
                ['name' => 'Furniture Assembly', 'price' => 60, 'desc' => 'Assembling or dismantling furniture.'],
            ],
            'gardening' => [
                ['name' => 'Lawn Mowing', 'price' => 50, 'desc' => 'Trimming and maintenance of lawn.'],
                ['name' => 'Planting Service', 'price' => 40, 'desc' => 'Planting new saplings and soil preparation.'],
            ]
        ];

        foreach ($categories as $slug => $servicesList) {
            $category = Category::firstOrCreate(['slug' => $slug], ['name' => ucfirst($slug)]);

            foreach ($servicesList as $serviceData) {
                Service::firstOrCreate(
                    ['name' => $serviceData['name']],
                    [
                        'slug' => Str::slug($serviceData['name']),
                        'provider_id' => $provider->id,
                        'category_id' => $category->id,
                        'price' => $serviceData['price'],
                        'short_description' => $serviceData['desc'],
                        'description' => $serviceData['desc'] . ' Performed by expert professionals.',
                        'duration' => 60,
                        'status' => 'active',
                        'is_featured' => true,
                    ]
                );
            }
        }
    }
}
