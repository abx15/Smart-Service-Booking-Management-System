<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderBlockedDate extends Model
{
    use HasFactory;

    protected $fillable = ['provider_id', 'date', 'reason'];

    protected $casts = [
        'date' => 'date',
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
}
