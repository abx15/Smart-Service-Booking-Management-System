<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class SystemHelper
{
    public static function generateBookingNumber(): string
    {
        return 'BK-' . date('Ymd') . '-' . strtoupper(Str::random(6));
    }

    public static function formatCurrency($amount): string
    {
        return '$' . number_format($amount, 2);
    }

    public static function uploadFile($file, $path): string
    {
        $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->storeAs($path, $filename, 'public');
        return 'storage/' . $path . '/' . $filename;
    }
}
