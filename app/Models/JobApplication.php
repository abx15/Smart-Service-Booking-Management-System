<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'position',
        'experience_years',
        'resume_path',
        'cover_letter',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope to filter by status
     */
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Scope for pending applications
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Get status badge color
     */
    public function getStatusColorAttribute()
    {
        return match ($this->status) {
            'pending' => 'yellow',
            'reviewing' => 'blue',
            'interviewed' => 'purple',
            'hired' => 'green',
            'rejected' => 'red',
            default => 'gray',
        };
    }

    /**
     * Get formatted application date
     */
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('M d, Y');
    }
}
