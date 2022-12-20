<?php

namespace App\Http\Controllers;

use App\Models\konfigurasiTransmisi;
use Illuminate\Http\Request;

class konfigurasiTransmisiController extends Controller
{
    public function index(){
        $konfigurasiTransmisi = konfigurasiTransmisi::latest()->paginate(5);
        $title = 'Data Konfigurasi Transmisi';
        return view('admin.page.konfigurasiTransmisi', compact('title', 'konfigurasiTransmisi'));
    }
    public function create(){
        $title = 'Tambah Konfigurasi Transmisi';
        return view('admin.page.konfigurasiTransmisi_create', compact('title'));
    }
    public function store(Request $request){
        konfigurasiTransmisi::create([
            'nama'          => $request->nama,
            'keterangan'    => $request->keterangan
        ]);
        return redirect()->route('konfigurasitransmisi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(konfigurasitransmisi $konfigurasitransmisi){
        $konfigurasitransmisi->delete();
        return redirect()->route('konfigurasitransmisi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function edit(konfigurasitransmisi $konfigurasitransmisi){
        $title = 'Edit Konfigurasi Transmisi';
        return view('admin.page.konfigurasiTransmisi_edit', compact('title','konfigurasitransmisi'));
    }
    public function update(Request $request, konfigurasitransmisi $konfigurasitransmisi){
        $konfigurasitransmisi->update([
            'nama'          => $request->nama,
            'keterangan'    => $request->keterangan
        ]);
        return redirect()->route('konfigurasitransmisi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
