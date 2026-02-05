<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_bookings' => Booking::count(),
            'pending_bookings' => Booking::where('status', 'pending')->count(),
            'total_revenue' => Booking::where('status', 'completed')->sum('total_amount'), // Assuming total_amount exists
            'total_services' => Service::count(),
            'total_customers' => User::whereHas('role', function ($q) {
                $q->where('name', 'customer');
            })->count(),
        ];

        $recent_bookings = Booking::with(['user', 'service'])->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_bookings'));
    }
}
