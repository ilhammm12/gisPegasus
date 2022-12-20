<?php

namespace App\Http\Controllers;

use App\Models\regularMap;
use Illuminate\Http\Request;

class regularMapController extends Controller
{
    public function __construct(){
        $this->regularMap = new regularMap();
    }
    public function index(){
        $title = 'regularmap';
        return view('admin.page.regularMap', compact('title'));
    }
    public function rmap(){
        $results = $this->regularMap->allData();
        return json_encode($results);
    }
}
