<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFaq extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'question', 'answer', 'order'];

    protected $casts = [
        'order' => 'integer',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
