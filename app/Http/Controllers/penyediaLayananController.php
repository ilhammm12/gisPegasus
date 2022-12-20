<?php

namespace App\Http\Controllers;

use App\Models\penyediaLayanan;
use Illuminate\Http\Request;

class penyediaLayananController extends Controller
{
    public function index(){
        $penyediaLayanan = penyediaLayanan::latest()->paginate(5);
        $title = 'Data Penyedia Layanan';
        return view('admin.page.penyediaLayanan', compact('title', 'penyediaLayanan'));
    }
    public function create(){
        $title = 'Tambah Penyedia Layanan';
        return view('admin.page.penyediaLayanan_create', compact('title'));
    }
    public function store(Request $request){
        penyediaLayanan::create([
            'nama'          => $request->nama,
            'keterangan'    => $request->keterangan
        ]);
        return redirect()->route('penyedialayanan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(penyedialayanan $penyedialayanan){
        $penyedialayanan->delete();
        return redirect()->route('penyedialayanan.index');
    }
    public function edit(penyedialayanan $penyedialayanan){
        $title = 'Edit Penyedia Layanan';
        return view('admin.page.penyediaLayanan_edit', compact('title','penyedialayanan'));
    }
    public function update(Request $request, penyedialayanan $penyedialayanan){
        $penyedialayanan->update([
            'nama'          => $request->nama,
            'keterangan'    => $request->keterangan
        ]);
        return redirect()->route('penyedialayanan.index');
    }
}
