<?php

namespace App\Http\Controllers;

use App\Models\konfigurasiPower;
use Illuminate\Http\Request;

class konfigurasiPowerController extends Controller
{
    public function index(){
        $konfigurasiPower = konfigurasiPower::latest()->paginate(5);
        $title = 'Data Konfigurasi Power';
        return view('admin.page.konfigurasiPower', compact('title', 'konfigurasiPower'));
    }
    public function create(){
        $title = 'Tambah Konfigurasi Power';
        return view('admin.page.konfigurasiPower_create', compact('title'));
    }
    public function store(Request $request){
        konfigurasiPower::create([
            'nama'          => $request->nama,
            'keterangan'    => $request->keterangan
        ]);
        return redirect()->route('konfigurasipower.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(konfigurasipower $konfigurasipower){
        $konfigurasipower->delete();
        return redirect()->route('konfigurasipower.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function edit(konfigurasipower $konfigurasipower){
        $title = 'Edit Konfigurasi Power';
        return view('admin.page.konfigurasiPower_edit', compact('title','konfigurasipower'));
    }
    public function update(Request $request, konfigurasipower $konfigurasipower){
        $konfigurasipower->update([
            'nama'          => $request->nama,
            'keterangan'    => $request->keterangan
        ]);
        return redirect()->route('konfigurasipower.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
