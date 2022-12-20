<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = ['nama','email','password','role_id'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
