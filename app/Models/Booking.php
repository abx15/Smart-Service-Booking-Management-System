<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'booking_number',
        'user_id',
        'service_id',
        'provider_id',
        'pricing_tier_id',
        'booking_date',
        'time_slot',
        'service_address',
        'landmark',
        'special_instructions',
        'status',
        'base_amount',
        'tax_amount',
        'discount_amount',
        'total_amount',
        'payment_method',
        'cancellation_reason',
        'cancelled_by',
        'cancelled_at',
        'completed_at'
    ];

    protected $casts = [
        'booking_date' => 'date',
        'base_amount' => 'decimal:2',
        'tax_amount' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'cancelled_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function pricingTier()
    {
        return $this->belongsTo(PricingTier::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    public function timeSlot()
    {
        return $this->hasOne(TimeSlot::class);
    }

    public function cancelledBy()
    {
        return $this->belongsTo(User::class, 'cancelled_by');
    }

    public function couponUsage()
    {
        return $this->hasOne(CouponUsage::class);
    }
}
