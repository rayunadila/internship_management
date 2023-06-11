<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentince extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const STATUS_NOT_CONFIRMED = "Belum Dikonfirmasi";
    const STATUS_APPROVED = "Disetujui";
    const STATUS_REJECTED = "Ditolak";

    const STATUS_CHOICE = [
        self::STATUS_NOT_CONFIRMED => self::STATUS_NOT_CONFIRMED,
        self::STATUS_APPROVED => self::STATUS_APPROVED,
        self::STATUS_REJECTED => self::STATUS_REJECTED,
    ];
}
