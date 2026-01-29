<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provider = User::where('email', 'provider@example.com')->first();
        if (!$provider) return;

        $category = Category::where('slug', 'deep-cleaning')->first();
        if (!$category) $category = Category::first();

        $services = [
            [
                'name' => 'Full House Deep Cleaning',
                'short_description' => 'Complete home deep cleaning service',
                'description' => 'Detailed deep cleaning of all rooms including kitchen and bathroom.',
                'base_price' => 150.00,
                'duration' => 240, // 4 hours
                'is_featured' => true,
                'status' => 'active',
            ]
        ];

        foreach ($services as $serviceData) {
            $serviceData['slug'] = Str::slug($serviceData['name']);
            $serviceData['provider_id'] = $provider->id;
            $serviceData['category_id'] = $category->id;

            Service::firstOrCreate(['slug' => $serviceData['slug']], $serviceData);
        }
    }
}
