<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Home Cleaning',
                'description' => 'Professional home cleaning services',
                'icon' => 'home',
                'children' => [
                    ['name' => 'Deep Cleaning', 'description' => 'Thorough deep cleaning'],
                    ['name' => 'Sofa Cleaning', 'description' => 'Sofa and upholstery cleaning'],
                ]
            ],
            [
                'name' => 'Plumbing',
                'description' => 'Expert plumbing services',
                'icon' => 'droplet',
                'children' => []
            ],
            [
                'name' => 'Electrical',
                'description' => 'Certified electrical services',
                'icon' => 'zap',
                'children' => []
            ],
        ];

        foreach ($categories as $catData) {
            $children = $catData['children'];
            unset($catData['children']);
            $catData['slug'] = Str::slug($catData['name']);
            $catData['is_active'] = true;

            $parent = Category::firstOrCreate(['slug' => $catData['slug']], $catData);

            foreach ($children as $childData) {
                $childData['slug'] = Str::slug($childData['name']);
                $childData['is_active'] = true;
                $childData['parent_id'] = $parent->id;
                Category::firstOrCreate(['slug' => $childData['slug']], $childData);
            }
        }
    }
}
