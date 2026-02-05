<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $bookings = $user->providerBookings()->with('service')->latest()->take(5)->get();
        $stats = [
            'total_bookings' => $user->providerBookings()->count(),
            'completed_bookings' => $user->providerBookings()->where('status', 'completed')->count(),
            'pending_bookings' => $user->providerBookings()->where('status', 'pending')->count(),
            'total_earnings' => $user->providerBookings()->where('status', 'completed')->sum('total_amount'),
        ];

        return view('worker.dashboard', compact('user', 'bookings', 'stats'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('worker.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'skills' => 'required|string',
            'experience' => 'required|integer|min:0',
            'bio' => 'nullable|string',
            'is_active' => 'sometimes|boolean',
        ]);

        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'skills' => $request->skills,
            'experience' => $request->experience,
            'bio' => $request->bio,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('worker.dashboard')
            ->with('success', 'Profile updated successfully.');
    }

    public function bookings()
    {
        $user = Auth::user();
        $bookings = $user->providerBookings()->with('service')->latest()->paginate(10);

        return view('worker.bookings', compact('user', 'bookings'));
    }

    public function earnings()
    {
        $user = Auth::user();
        $earnings = $user->providerBookings()->where('status', 'completed')->latest()->paginate(10);
        $totalEarnings = $user->providerBookings()->where('status', 'completed')->sum('total_amount');

        return view('worker.earnings', compact('user', 'earnings', 'totalEarnings'));
    }
}
