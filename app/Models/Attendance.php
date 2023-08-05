<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const STATUS_PRESENT = "Hadir";
    const STATUS_PERMIT = "Izin";
    const STATUS_SICK = "Sakit";

    const STATUS_CHOICE = [
        self::STATUS_PRESENT => self::STATUS_PRESENT,
        self::STATUS_SICK => self::STATUS_SICK,
        self::STATUS_PERMIT => self::STATUS_PERMIT,
    ];

    public function apprentince()
    {
        return $this->belongsTo(Apprentince::class, 'apprentince_id', 'id');
    }
    
}
