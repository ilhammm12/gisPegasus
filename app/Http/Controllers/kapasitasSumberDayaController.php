<?php

namespace App\Http\Controllers;

use App\Models\kapasitasSumberDaya;
use Illuminate\Http\Request;

class kapasitasSumberDayaController extends Controller
{
    public function index(){
        $kapasitasSumberDaya= kapasitasSumberDaya::latest()->paginate(5);
        $title = 'Data Kapasitas Sumber Daya';
        return view('admin.page.kapasitasSumberDaya', compact('title','kapasitasSumberDaya'));
    }
    public function create(){
        $title = 'Tambah Kapasitas Sumber Daya';
        return view('admin.page.kapasitasSumberDaya_create', compact('title'));
    }
    public function store(Request $request){
        kapasitasSumberDaya::create([
            'kapasitas'     =>$request->kapasitas,
            'keterangan'    =>$request->keterangan
        ]);
        return redirect()->route('kapasitassumberdaya.index');
    }
    public function destroy(kapasitassumberdaya $kapasitassumberdaya){
        $kapasitassumberdaya->delete();
        return redirect()->route('kapasitassumberdaya.index');
    }
    public function edit(kapasitassumberdaya $kapasitassumberdaya){
        $title = 'Edit Kapasitas Sumber Daya';
        return view('admin.page.kapasitasSumberDaya_edit', compact('title','kapasitassumberdaya'));
    }
    public function update(Request $request, kapasitassumberdaya $kapasitassumberdaya){
        $kapasitassumberdaya->update([
            'kapasitas'     =>$request->kapasitas,
            'keterangan'    =>$request->keterangan
        ]);
        return redirect()->route('kapasitassumberdaya.index');
    }
}
