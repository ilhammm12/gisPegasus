<?php

namespace App\Http\Controllers;

use App\Models\terminal;
use App\Models\penyediaLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class terminalController extends Controller
{
    public function __construct(){
        $this->terminalTitik = new terminal();
    }
    public function terminaltitik(){
        $results = $this->terminalTitik->allData();
        return json_encode($results);
    }
    public function index(){
        $terminal = terminal::latest()->paginate(5);
        $title = 'Data Terminal';
        return view('admin.page.terminal', compact('title', 'terminal'));
    }
    public function create(){
        $penyediaLayanan = penyediaLayanan::latest()->get();
        $title = 'Tambah Terminal';
        return view('admin.page.terminal_create', compact('title','penyediaLayanan'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/gis', $gambar->hashName());

        terminal::create([
            'penyedia_id'   => $request->penyedia_id,
            'nama'          => $request->nama,
            'kode_unik'     => $request->kode_unik,
            'gambar'        => $gambar->hashName(),
            'keterangan'    => $request->keterangan,
            'alamat'        => $request->alamat,
            'latitude'      => $request->latitude,
            'longitude'     => $request->longitude
        ]);
        return redirect()->route('terminal.index');
    }

    public function edit(Terminal $terminal){
        $title = 'Edit Data Terminal';
        $penyediaLayanan = penyediaLayanan::latest()->get();
        return view('admin.page.terminal_edit', compact('title','terminal','penyediaLayanan'));
    }
    public function update(Request $request, Terminal $terminal){
        $this->validate($request,[
            'gambar'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/gis', $gambar->hashName());

            Storage::delete('public/gis/'.$terminal->gambar);

            $terminal->update([
                'penyedia_id'   => $request->penyedia_id,
                'nama'          => $request->nama,
                'kode_unik'     => $request->kode_unik,
                'gambar'        => $gambar->hashName(),
                'keterangan'    => $request->keterangan,
                'alamat'        => $request->alamat,
                'latitude'      => $request->latitude,
                'longitude'     => $request->longitude
            ]);
        } else {
            $terminal->update([
                'penyedia_id'   => $request->penyedia_id,
                'nama'          => $request->nama,
                'kode_unik'     => $request->kode_unik,
                'keterangan'    => $request->keterangan,
                'alamat'        => $request->alamat,
                'latitude'      => $request->latitude,
                'longitude'     => $request->longitude
            ]);
        }
        return redirect()->route('terminal.index');
    }
    public function destroy(Terminal $terminal){
        Storage::delete('public/gis'.$terminal->gambar);
        $terminal->delete();
        return redirect()->route('terminal.index');
    }
}
