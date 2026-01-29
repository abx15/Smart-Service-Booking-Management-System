<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'booking_id',
        'user_id',
        'service_id',
        'provider_id',
        'rating',
        'comment',
        'images',
        'provider_response',
        'responded_at',
        'helpful_count',
        'status'
    ];

    protected $casts = [
        'images' => 'array',
        'rating' => 'integer',
        'helpful_count' => 'integer',
        'responded_at' => 'datetime',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

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
}
