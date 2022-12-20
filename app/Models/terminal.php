<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class terminal extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'penyedia_id',
        'nama',
        'kode_unik',
        'gambar',
        'keterangan',
        'alamat',
        'latitude',
        'longitude',
    ];
    public function penyedialayanan()
    {
        return $this->belongsTo(penyediaLayanan::class, 'penyedia_id');
    }
    public function allData(){
        $results = DB::table('terminals')
            ->get();
        return $results;
    }
}
