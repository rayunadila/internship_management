<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprentinceFile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const STATUS_NOT_CONFIRMED = "Belum Dikonfirmasi";
    const STATUS_CONFIRMED = "Dikonfirmasi";
    const STATUS_NOT_COMPLETED = "Belum Lengkap";

    public function apprentince()
    {
        return $this->belongsTo(Apprentince::class, 'apprentince_id', 'id');
    }
}
