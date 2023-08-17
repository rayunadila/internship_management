<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprentinceRequest extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const STATUS_NOT_CONFIRMED = "Belum Dikonfirmasi";
    const STATUS_ACCEPTED = "Diterima";
    const STATUS_REJECTED = "Ditolak";
    const STATUS_ACCEPTED_EMAIL = "Diterima (belum ada surat balasan)";
    const STATUS_REJECTED_EMAIL = "Ditolak (belum ada surat balasan)";

    const LETTER_ACCEPT = "Surat Penerimaan Magang";
    const LETTER_REJECT = "Surat Penolakan Magang";
}
