<?php

namespace App\Http\Controllers;

use App\Models\jenisSumberDaya;
use App\Models\kapasitasSumberDaya;
use Illuminate\Http\Request;

class jenisSumberDayaController extends Controller
{
    public function index(){
        $jenisSumberDaya = jenisSumberDaya::latest()->paginate(5);
        $title = 'Data Jenis Sumber Daya';
        return view('admin.page.jenisSumberDaya', compact('title','jenisSumberDaya'));
    }
    public function create(){
        $kapasitasSumberDaya = kapasitasSumberDaya::latest()->get();
        $title = 'Tambah Jenis Sumber Daya';
        return view('admin.page.jenisSumberDaya_create', compact('title','kapasitasSumberDaya'));
    }
    public function store(Request $request){
        jenisSumberDaya::create([
            'kapasitasdaya_id'  =>$request->kapasitasdaya_id,
            'nama'              =>$request->nama,
            'keterangan'        =>$request->keterangan
        ]);
        return redirect()->route('jenissumberdaya.index');
    }
    public function destroy(jenissumberdaya $jenissumberdaya){
        $jenissumberdaya->delete();
        return redirect()->route('jenissumberdaya.index');
    }
    public function edit(jenissumberdaya $jenissumberdaya){
        $kapasitasSumberDaya = kapasitasSumberDaya::latest()->get();
        $title = 'Edit Jenis Sumber Daya';
        return view('admin.page.jenisSumberDaya_edit', compact('title','jenissumberdaya','kapasitasSumberDaya'));
    }
    public function update(Request $request, jenissumberdaya $jenissumberdaya){
        $jenissumberdaya->update([
            'kapasitasdaya_id'  =>$request->kapasitasdaya_id,
            'nama'              =>$request->nama,
            'keterangan'        =>$request->keterangan
        ]);
        return redirect()->route('jenissumberdaya.index');
    }
}
