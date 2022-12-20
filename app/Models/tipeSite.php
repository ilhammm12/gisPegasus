<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipeSite extends Model
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
        return $this->hasMany(btsTower::class, 'tipesite_id');
    }
}
