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
        $service = Service::with('category', 'provider')->findOrFail($serviceId);
        $addresses = Auth::user()->addresses;

        return view('bookings.create', compact('service', 'addresses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'scheduled_date' => 'required|date|after:today',
            'scheduled_time' => 'required',
            'address_id' => 'required|exists:addresses,id',
            'notes' => 'nullable|string',
        ]);

        $booking = Booking::create([
            'booking_number' => SystemHelper::generateBookingNumber(),
            'user_id' => Auth::id(),
            'provider_id' => Service::find($request->service_id)->provider_id,
            'service_id' => $request->service_id,
            'address_id' => $request->address_id,
            'scheduled_date' => $request->scheduled_date . ' ' . $request->scheduled_time, // Combining date and time
            'total_amount' => Service::find($request->service_id)->price, // Assuming 1 hour for now, logic can be complex
            'status' => 'pending',
            'payment_status' => 'pending',
            'notes' => $request->notes,
        ]);

        return redirect()->route('dashboard')->with('success', 'Booking created successfully!');
    }
}
