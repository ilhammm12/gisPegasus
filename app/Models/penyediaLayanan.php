<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyediaLayanan extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'nama',
        'keterangan',
    ];
    public function btstower()
    {
        return $this->hasMany(btsTower::class, 'penyedia_id');
    }
    public function terminal()
    {
        return $this->hasMany(terminal::class, 'penyedia_id');
    }
}
