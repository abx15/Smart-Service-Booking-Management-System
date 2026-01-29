<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingTier extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name',
        'description',
        'price',
        'features'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'features' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
