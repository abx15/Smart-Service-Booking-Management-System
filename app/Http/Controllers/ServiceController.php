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

    public function show(Service $service)
    {
        $service->load('category', 'provider', 'reviews.user');
        return view('services.show', compact('service'));
    }
}
