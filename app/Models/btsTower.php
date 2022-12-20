<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class btsTower extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'nama',
        'jenisdaya_id',
        'penyedia_id',
        'tipesite_id',
        'tipetower_id',
        'gambar',
        'tinggi_tower',
        'longitude',
        'latitude',
        'radius',
        'lahan',
        'alamat',
        'nilai_kontrak',
        'kota',
        'provinsi',
    ];
    public function jenissumberdaya()
    {
        return $this->belongsTo(jenisSumberDaya::class, 'jenisdaya_id');
    }
    public function penyedialayanan()
    {
        return $this->belongsTo(penyediaLayanan::class, 'penyedia_id');
    }
    public function tipesite()
    {
        return $this->belongsTo(tipeSite::class, 'tipesite_id');
    }
    public function tipetower()
    {
        return $this->belongsTo(tipeTower::class, 'tipetower_id');
    }
}
