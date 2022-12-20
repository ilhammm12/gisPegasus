<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class aksesInternet extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'jenisdaya_id',
        'nama',
        'gambar',
        'latitude',
        'longitude',
        'provinsi',
        'kota',
        'alamat',
        'nama_kontak',
        'email_kontak',
        'notelp_kontak',
    ];
    public function jenissumberdaya()
    {
        return $this->belongsTo(jenisSumberDaya::class, 'jenisdaya_id');
    }
    public function allData(){
        $results = DB::table('akses_internets')
            ->get();
        return $results;
    }
}
