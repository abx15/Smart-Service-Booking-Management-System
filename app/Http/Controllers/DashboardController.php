<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\Service;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return $this->adminDashboard();
        } elseif ($user->hasRole('provider')) {
            return $this->providerDashboard();
        } else {
            return $this->customerDashboard();
        }
    }

    private function adminDashboard()
    {
        $stats = [
            'users' => User::count(),
            'providers' => User::whereHas('role', function ($q) {
                $q->where('name', 'provider');
            })->count(),
            'services' => Service::count(),
            'bookings' => Booking::count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }

    private function providerDashboard()
    {
        $providerId = Auth::id(); // Assuming user_id is provider_id logic or relation
        // Actually provider_id in services and bookings might refer to User ID if provider is a User.
        // Let's assume provider_id in tables refers to User ID of role provider.

        $bookings = Booking::where('provider_id', $providerId)->latest()->take(5)->get();
        $stats = [
            'total_bookings' => Booking::where('provider_id', $providerId)->count(),
            'pending_bookings' => Booking::where('provider_id', $providerId)->where('status', 'pending')->count(),
            'earnings' => Booking::where('provider_id', $providerId)->where('status', 'completed')->sum('total_amount'),
        ];

        return view('provider.dashboard', compact('bookings', 'stats'));
    }

    private function customerDashboard()
    {
        $bookings = Booking::where('user_id', Auth::id())->with('service')->latest()->take(5)->get();
        return view('dashboard', compact('bookings'));
    }
}
