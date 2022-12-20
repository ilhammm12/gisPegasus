<?php

namespace App\Http\Controllers;

use App\Models\btsTower;
use App\Models\jenisSumberDaya;
use App\Models\penyediaLayanan;
use App\Models\tipeTower;
use App\Models\tipeSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class btsTowerController extends Controller
{
    public function index(){
        $btsTower = btsTower::with('jenisSumberDaya.kapasitassumberdaya')->get();
        $title = 'Data BTS';
        return view('admin.page.btsTower', compact('title','btsTower'));
    }
    public function create(){
        $jenisSumberDaya = jenisSumberDaya::latest()->get();
        $penyediaLayanan = penyediaLayanan::latest()->get();
        $tipeTower = tipeTower::latest()->get();
        $tipeSite = tipeSite::latest()->get();
        $title = 'Tambah BTS';
        return view('admin.page.btsTower_create', compact('title','jenisSumberDaya','penyediaLayanan','tipeTower','tipeSite'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/gis', $gambar->hashName());

        btsTower::create([
            'nama'          => $request->nama,
            'jenisdaya_id'  => $request->jenisdaya_id,
            'penyedia_id'   => $request->penyedia_id,
            'tipesite_id'   => $request->tipesite_id,
            'tipetower_id'  => $request->tipetower_id,
            'gambar'        => $gambar->hashName(),
            'tinggi_tower'  => $request->tinggitower,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude,
            'radius'         => $request->radius,
            'lahan'         => $request->luaslahan,
            'alamat'        => $request->alamat,
            'nilai_kontrak' => $request->nilaikontrak,
            'kota'          => 'balikpapan',
            'provinsi'      => 'kalimantan timur'
        ]);
        return redirect()->route('btstower.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(btstower $btstower){
        Storage::delete('public/gis'.$btstower->gambar);
        $btstower->delete();
        return redirect()->route('btstower.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function edit(btstower $btstower){
        $jenisSumberDaya = jenisSumberDaya::latest()->get();
        $penyediaLayanan = penyediaLayanan::latest()->get();
        $tipeTower = tipeTower::latest()->get();
        $tipeSite = tipeSite::latest()->get();
        $title = 'Edit BTS';
        return view('admin.page.btsTower_edit', compact('title','btstower','jenisSumberDaya','penyediaLayanan','tipeTower','tipeSite'));
    }
    public function update(Request $request, btstower $btstower){
        $this->validate($request,[
            'gambar'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('gambar')){
            $btstower->update([
                'nama'          => $request->nama,
                'jenisdaya_id'  => $request->jenisdaya_id,
                'penyedia_id'   => $request->penyedia_id,
                'tipesite_id'   => $request->tipesite_id,
                'tipetower_id'  => $request->tipetower_id,
                'gambar'        => $gambar->hashName(),
                'tinggi_tower'  => $request->tinggitower,
                'longitude'     => $request->longitude,
                'latitude'      => $request->latitude,
                'radius'         => $request->radius,
                'lahan'         => $request->luaslahan,
                'alamat'        => $request->alamat,
                'nilai_kontrak' => $request->nilaikontrak,
                'kota'          => 'balikpapan',
                'provinsi'      => 'kalimantan timur'
            ]);
        } else {
            $btstower->update([
                'nama'          => $request->nama,
                'jenisdaya_id'  => $request->jenisdaya_id,
                'penyedia_id'   => $request->penyedia_id,
                'tipesite_id'   => $request->tipesite_id,
                'tipetower_id'  => $request->tipetower_id,
                'tinggi_tower'  => $request->tinggitower,
                'longitude'     => $request->longitude,
                'latitude'      => $request->latitude,
                'radius'         => $request->radius,
                'lahan'         => $request->luaslahan,
                'alamat'        => $request->alamat,
                'nilai_kontrak' => $request->nilaikontrak,
                'kota'          => 'balikpapan',
                'provinsi'      => 'kalimantan timur'
            ]);
        }

        return redirect()->route('btstower.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
