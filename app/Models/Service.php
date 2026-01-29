<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'provider_id',
        'category_id',
        'name',
        'slug',
        'short_description',
        'description',
        'base_price',
        'duration',
        'images',
        'inclusions',
        'exclusions',
        'status',
        'is_featured',
        'views_count',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'base_price' => 'decimal:2',
        'duration' => 'integer',
        'images' => 'array',
        'inclusions' => 'array',
        'exclusions' => 'array',
        'is_featured' => 'boolean',
        'views_count' => 'integer',
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pricingTiers()
    {
        return $this->hasMany(PricingTier::class);
    }

    public function timeSlots()
    {
        return $this->hasMany(TimeSlot::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function faqs()
    {
        return $this->hasMany(ServiceFaq::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
