<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category', 'provider')->paginate(12);
        return view('services.index', compact('services'));
    }

    public function category($category)
    {
        $categoryColors = [
            'cleaning' => 'from-blue-400 to-blue-600',
            'plumbing' => 'from-cyan-400 to-cyan-600',
            'electrical' => 'from-yellow-400 to-orange-600',
            'moving' => 'from-green-400 to-green-600',
            'painting' => 'from-purple-400 to-purple-600',
            'gardening' => 'from-emerald-400 to-emerald-600',
        ];

        $categoryIcons = [
            'cleaning' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
            'plumbing' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
            'electrical' => 'M13 10V3L4 14h7v7l9-11h-7z',
            'moving' => 'M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4',
            'painting' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
            'gardening' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
        ];

        $categoryDescriptions = [
            'cleaning' => 'Professional cleaning solutions for homes and offices. From regular maintenance to deep cleaning services.',
            'plumbing' => 'Expert plumbing services for repairs, installations, and emergency situations. Available 24/7.',
            'electrical' => 'Licensed electricians providing safe and code-compliant electrical services for all your needs.',
            'moving' => 'Professional moving services with careful packing, transportation, and unpacking for stress-free relocation.',
            'painting' => 'Professional painting services using premium quality paints for beautiful and lasting results.',
            'gardening' => 'Complete gardening and landscaping solutions to create and maintain beautiful outdoor spaces.',
        ];

        // Sample services data based on category
        $allServices = [
            'cleaning' => [
                [
                    'name' => 'Home Cleaning',
                    'description' => 'Complete home cleaning service including all rooms, kitchen, and bathrooms.',
                    'price' => '80',
                    'unit' => '/session',
                    'rating' => '4.9',
                    'color' => 'from-blue-400 to-blue-500',
                    'slug' => 'home-cleaning',
                    'features' => ['All rooms cleaned', 'Kitchen deep clean', 'Bathroom sanitation', 'Floor cleaning']
                ],
                [
                    'name' => 'Office Cleaning',
                    'description' => 'Professional office cleaning services for a productive work environment.',
                    'price' => '120',
                    'unit' => '/visit',
                    'rating' => '4.8',
                    'color' => 'from-blue-500 to-blue-600',
                    'slug' => 'office-cleaning',
                    'features' => ['Work area cleaning', 'Restroom sanitation', 'Trash removal', 'Floor maintenance']
                ],
                [
                    'name' => 'Deep Cleaning',
                    'description' => 'Intensive deep cleaning service for thorough sanitation and hygiene.',
                    'price' => '150',
                    'unit' => '/session',
                    'rating' => '4.9',
                    'color' => 'from-blue-600 to-blue-700',
                    'slug' => 'deep-cleaning',
                    'features' => ['Detailed cleaning', 'Sanitization', 'Hard-to-reach areas', 'Appliance cleaning']
                ],
            ],
            'plumbing' => [
                [
                    'name' => 'Leak Repair',
                    'description' => 'Professional leak detection and repair services for all plumbing fixtures.',
                    'price' => '100',
                    'unit' => '/visit',
                    'rating' => '4.8',
                    'color' => 'from-cyan-400 to-cyan-500',
                    'slug' => 'leak-repair',
                    'features' => ['Leak detection', 'Pipe repair', 'Fixture replacement', 'Emergency service']
                ],
                [
                    'name' => 'Pipe Installation',
                    'description' => 'Complete pipe installation and replacement services for residential and commercial properties.',
                    'price' => '200',
                    'unit' => '/project',
                    'rating' => '4.9',
                    'color' => 'from-cyan-500 to-cyan-600',
                    'slug' => 'pipe-installation',
                    'features' => ['New pipe installation', 'Pipe replacement', 'Code compliance', 'Warranty included']
                ],
            ],
            'electrical' => [
                [
                    'name' => 'Wiring Installation',
                    'description' => 'Professional electrical wiring installation for new construction and renovations.',
                    'price' => '150',
                    'unit' => '/hour',
                    'rating' => '4.9',
                    'color' => 'from-yellow-400 to-orange-500',
                    'slug' => 'wiring-installation',
                    'features' => ['New wiring', 'Code compliance', 'Safety inspection', 'Warranty']
                ],
                [
                    'name' => 'Fan Installation',
                    'description' => 'Ceiling fan and exhaust fan installation services.',
                    'price' => '80',
                    'unit' => '/fan',
                    'rating' => '4.7',
                    'color' => 'from-orange-400 to-orange-600',
                    'slug' => 'fan-installation',
                    'features' => ['Fan mounting', 'Wiring', 'Testing', 'Cleanup']
                ],
            ],
            'moving' => [
                [
                    'name' => 'House Moving',
                    'description' => 'Complete house moving services with packing and unpacking.',
                    'price' => '300',
                    'unit' => '/move',
                    'rating' => '4.9',
                    'color' => 'from-green-400 to-green-500',
                    'slug' => 'house-moving',
                    'features' => ['Packing', 'Transportation', 'Unpacking', 'Insurance']
                ],
                [
                    'name' => 'Office Moving',
                    'description' => 'Professional office relocation services for businesses.',
                    'price' => '500',
                    'unit' => '/move',
                    'rating' => '4.8',
                    'color' => 'from-green-500 to-green-600',
                    'slug' => 'office-moving',
                    'features' => ['Equipment handling', 'Minimal downtime', 'Setup', 'IT relocation']
                ],
            ],
            'painting' => [
                [
                    'name' => 'Interior Painting',
                    'description' => 'Professional interior painting services for all types of properties.',
                    'price' => '200',
                    'unit' => '/room',
                    'rating' => '4.8',
                    'color' => 'from-purple-400 to-purple-500',
                    'slug' => 'interior-painting',
                    'features' => ['Wall preparation', 'Premium paint', 'Clean finish', 'Touch-up kit']
                ],
                [
                    'name' => 'Exterior Painting',
                    'description' => 'Exterior painting services for homes and commercial buildings.',
                    'price' => '400',
                    'unit' => '/project',
                    'rating' => '4.9',
                    'color' => 'from-purple-500 to-purple-600',
                    'slug' => 'exterior-painting',
                    'features' => ['Surface preparation', 'Weather-resistant paint', 'Cleanup', 'Warranty']
                ],
            ],
            'gardening' => [
                [
                    'name' => 'Lawn Care',
                    'description' => 'Complete lawn maintenance and care services.',
                    'price' => '60',
                    'unit' => '/visit',
                    'rating' => '4.7',
                    'color' => 'from-emerald-400 to-emerald-500',
                    'slug' => 'lawn-care',
                    'features' => ['Mowing', 'Edging', 'Fertilizing', 'Weed control']
                ],
                [
                    'name' => 'Landscaping',
                    'description' => 'Professional landscape design and installation services.',
                    'price' => '150',
                    'unit' => '/hour',
                    'rating' => '4.9',
                    'color' => 'from-emerald-500 to-emerald-600',
                    'slug' => 'landscaping',
                    'features' => ['Design consultation', 'Plant selection', 'Installation', 'Maintenance plan']
                ],
            ],
        ];

        $services = $allServices[$category] ?? [];

        return view('services.category', compact(
            'category',
            'services',
            'categoryColors',
            'categoryIcons',
            'categoryDescriptions'
        ));
    }

    public function show($category, $service)
    {
        // In a real app, fetch from database
        $serviceData = [
            'name' => ucfirst($service),
            'category' => $category,
            'description' => 'Professional service delivered by experienced experts.',
            'price' => '100',
            'unit' => '/session',
            'rating' => '4.8',
            'features' => ['Feature 1', 'Feature 2', 'Feature 3'],
            'whats_included' => ['Professional service', 'Quality materials', 'Timely completion', 'Satisfaction guarantee'],
        ];

        return view('services.show', compact('category', 'service', 'serviceData'));
    }
}
