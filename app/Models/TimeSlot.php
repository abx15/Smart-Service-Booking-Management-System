<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'date',
        'start_time',
        'end_time',
        'is_booked',
        'booking_id'
    ];

    protected $casts = [
        'date' => 'date',
        'is_booked' => 'boolean',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
