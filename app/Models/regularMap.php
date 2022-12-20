<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class regularMap extends Model
{
    public function allData(){
        $results = DB::table('bts_towers')
            ->get();
        return $results;
    }
}
