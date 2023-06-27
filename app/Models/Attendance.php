<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    const STATUS_PRESENT = "Hadir";
    const STATUS_ABSENT = "Tidak Hadir";

    const STATUS_CHOICE = [
        self::STATUS_PRESENT => self::STATUS_PRESENT,
        self::STATUS_ABSENT => self::STATUS_ABSENT,
    ];
}
