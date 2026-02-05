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
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('provider')) {
            return redirect()->route('worker.dashboard');
        } else {
            return $this->customerDashboard();
        }
    }

    private function customerDashboard()
    {
        $bookings = Booking::where('user_id', Auth::id())->with('service')->latest()->take(5)->get();
        return view('dashboard', compact('bookings'));
    }
}
