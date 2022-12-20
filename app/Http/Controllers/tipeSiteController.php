<?php

namespace App\Http\Controllers;

use App\Models\tipeSite;
use Illuminate\Http\Request;

class tipeSiteController extends Controller
{
    public function index(){
        $tipeSite = tipeSite::latest()->paginate(5);
        $title = 'Data Tipe Site';
        return view('admin.page.tipeSite', compact('title', 'tipeSite'));
    }
    public function create(){
        $title = 'Tambah Tipe Site';
        return view('admin.page.tipeSite_create', compact('title'));
    }
    public function store(Request $request){
        tipeSite::create([
            'nama'          => $request->nama,
            'keterangan'    => $request->keterangan
        ]);
        return redirect()->route('tipesite.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(tipesite $tipesite){
        $tipesite->delete();
        return redirect()->route('tipesite.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function edit(tipesite $tipesite){
        $title = 'Edit Tipe Site';
        return view('admin.page.tipeSite_edit', compact('title','tipesite'));
    }
    public function update(Request $request, tipesite $tipesite){
        $tipesite->update([
            'nama'          => $request->nama,
            'keterangan'    => $request->keterangan
        ]);
        return redirect()->route('tipesite.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
