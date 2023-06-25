<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentince extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Status
    const STATUS_ON_APPRENTINCE = "Magang";
    const STATUS_FINISHED = "Selesai Magang";

    // Gender
    const GENDER_MAN = "Laki-laki";
    const GENDER_WOMAN = "Perempuan";

    const GENDER_CHOICE = [
        self::GENDER_MAN => self::GENDER_MAN,
        self::GENDER_WOMAN => self::GENDER_WOMAN,
    ];
}
