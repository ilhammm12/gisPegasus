<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipeTower extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'nama',
        'model',
    ];
    public function btstower()
    {
        return $this->hasMany(btsTower::class, 'tipetower_id');
    }
}
