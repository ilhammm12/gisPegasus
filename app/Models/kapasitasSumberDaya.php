<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kapasitasSumberDaya extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'kapasitas',
        'keterangan',
    ];
    public function jenissumberdaya()
    {
        return $this->hasMany(jenisSumberDaya::class, 'kapasitasdaya_id');
    }
}
