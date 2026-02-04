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
        // Define valid categories
        $validCategories = ['cleaning', 'plumbing', 'electrical', 'moving', 'painting', 'gardening'];

        // Check if category exists
        if (!in_array($category, $validCategories)) {
            abort(404);
        }

        // Return the specific category blade view
        // e.g., services/cleaning.blade.php, services/plumbing.blade.php, etc.
        return view("services.{$category}");
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

    // Residential Services Landing (Phase 3)
    public function residential()
    {
        return view('residential-services.index');
    }

    public function residentialCategory($category)
    {
        $validCategories = ['cleaning', 'plumbing', 'electrical', 'moving', 'painting', 'gardening'];

        if (!in_array($category, $validCategories)) {
            abort(404);
        }

        return view("services.{$category}");
    }

    // Commercial Services Landing (Phase 3)
    public function commercial()
    {
        return view('commercial-services.index');
    }

    public function commercialIndustry($industry)
    {
        $validIndustries = ['healthcare', 'retail', 'hospitality', 'offices', 'restaurants', 'manufacturing', 'government', 'banks'];

        if (!in_array($industry, $validIndustries)) {
            abort(404);
        }

        return view("commercial-services.industries.{$industry}");
    }
}
