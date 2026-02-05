<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Helpers\SystemHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $serviceId = $request->query('service_id');

        if (!$serviceId) {
            return redirect()->route('services.index')->with('error', 'Please select a service to book.');
        }

        $service = Service::with('category', 'provider')->findOrFail($serviceId);
        // Removed Address model logic as we store address in User model now

        return view('bookings.create', compact('service'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'scheduled_date' => 'required|date|after:today',
            'scheduled_time' => 'required',
            'address_type' => 'required|in:profile,new',
            'custom_address' => 'nullable|string|required_if:address_type,new',
            'notes' => 'nullable|string',
        ]);

        $service = Service::findOrFail($request->service_id);
        $user = Auth::user();

        // Determine the address to use
        $bookingAddress = $request->address_type === 'profile' ? $user->address : $request->custom_address;

        $booking = Booking::create([
            'booking_number' => SystemHelper::generateBookingNumber(),
            'user_id' => $user->id,
            'provider_id' => $service->provider_id, // Still assigning to specific provider for now
            'service_id' => $service->id,
            'address' => $bookingAddress, // Ensure Booking model has 'address' column
            'scheduled_date' => $request->scheduled_date . ' ' . $request->scheduled_time,
            'total_amount' => $service->price,
            'status' => 'pending',
            'payment_status' => 'pending',
            'notes' => $request->notes,
        ]);

        return redirect()->route('dashboard')->with('success', 'Booking created successfully!');
    }
}
