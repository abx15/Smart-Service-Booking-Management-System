<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Str;

class QuickServiceSeeder extends Seeder
{
    public function run()
    {
        // Get ANY user to be the provider (fallback to ID 1)
        $provider = User::where('role', 'worker')->first() ?? User::find(1);

        if (!$provider) {
            $provider = User::create([
                'name' => 'Auto Provider',
                'email' => 'auto_provider@example.com',
                'password' => bcrypt('password'),
                'role' => 'worker',
                'phone' => '9999999999'
            ]);
        }

        $servicesConfig = [
            'cleaning' => [
                ['name' => 'Deep Home Cleaning', 'price' => 120, 'desc' => 'Complete home deep cleaning service.'],
                ['name' => 'Sofa Shampooing', 'price' => 45, 'desc' => 'Professional sofa cleaning and sanitization.'],
            ],
            'electrical' => [
                ['name' => 'Fan Repair', 'price' => 25, 'desc' => 'Ceiling or wall fan repair service.'],
                ['name' => 'Switchboard Installation', 'price' => 30, 'desc' => 'New switchboard wiring and installation.'],
            ],
            'plumbing' => [
                ['name' => 'Tap Leak Repair', 'price' => 20, 'desc' => 'Fixing leaking bathroom or kitchen taps.'],
                ['name' => 'Pipe Blockage Removal', 'price' => 50, 'desc' => 'Clearing blocked drainage pipes.'],
            ],
            'painting' => [
                ['name' => 'Living Room Painting', 'price' => 200, 'desc' => 'Premium paint finish for living room.'],
                ['name' => 'Full Exterior Painting', 'price' => 1000, 'desc' => 'Complete exterior weather-proof painting.'],
            ],
            'moving' => [
                ['name' => '1BHK House Shifting', 'price' => 150, 'desc' => 'Complete shifting for 1BHK apartment.'],
                ['name' => 'Office Move', 'price' => 500, 'desc' => 'Professional office relocation service.'],
            ],
            'gardening' => [
                ['name' => 'Lawn Mowing', 'price' => 40, 'desc' => 'Trimming and maintenance of home lawn.'],
                ['name' => 'Planting Service', 'price' => 30, 'desc' => 'Planting new flowers and shrubs.'],
            ]
        ];

        foreach ($servicesConfig as $catSlug => $services) {
            $category = Category::firstOrCreate(
                ['slug' => $catSlug],
                ['name' => ucfirst($catSlug)]
            );

            foreach ($services as $svc) {
                try {
                    Service::firstOrCreate(
                        ['name' => $svc['name']],
                        [
                            'slug' => Str::slug($svc['name']),
                            'provider_id' => $provider->id,
                            'category_id' => $category->id,
                            'price' => $svc['price'],
                            'short_description' => $svc['desc'],
                            'description' => $svc['desc'] . ' - Professional Service.',
                            'duration' => 60,
                            'status' => 'active',
                            'is_featured' => true
                        ]
                    );
                } catch (\Exception $e) {
                    echo "Skipped " . $svc['name'] . ": " . $e->getMessage() . "\n";
                }
            }
        }
    }
}
