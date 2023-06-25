<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyActivity extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Status
    const STATUS_NOT_CONFIRMED = "Belum Dikonfirmasi";
    const STATUS_CONFIRMED = "Sudah Dikonfirmasi";
    
}
