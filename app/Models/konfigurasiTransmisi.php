<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konfigurasiTransmisi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'keterangan',
    ];
}
