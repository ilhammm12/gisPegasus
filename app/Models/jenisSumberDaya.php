<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisSumberDaya extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'kapasitasdaya_id',
        'nama',
        'keterangan',
    ];
    public function kapasitassumberdaya()
    {
        return $this->belongsTo(kapasitasSumberDaya::class, 'kapasitasdaya_id');
    }
    public function btstower()
    {
        return $this->hasMany(btsTower::class, 'jenisdaya_id');
    }
    public function aksesinternet()
    {
        return $this->hasMany(aksesInternet::class, 'jenisdaya_id');
    }
}
