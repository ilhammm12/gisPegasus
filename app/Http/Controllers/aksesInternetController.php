<?php

namespace App\Http\Controllers;

use App\Models\aksesInternet;
use App\Models\jenisSumberDaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class aksesInternetController extends Controller
{
    public function __construct(){
        $this->aksesInternetTitik = new aksesInternet();
    }
    public function aksesinternettitik(){
        $results = $this->aksesInternetTitik->allData();
        return json_encode($results);
    }
    public function index(){
        // $btsTower = btsTower::with('jenisSumberDaya.kapasitassumberdaya')->get();
        $aksesInternet = aksesInternet::with('jenisSumberDaya.kapasitassumberdaya')->get();
        $title = 'Data Akses Internet';
        return view('admin.page.aksesInternet', compact('title', 'aksesInternet'));
    }
    public function create(){
        $jenisSumberDaya = jenisSumberDaya::latest()->get();
        $title = 'Tambah Akses Internet';
        return view('admin.page.aksesInternet_create', compact('title','jenisSumberDaya'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/gis', $gambar->hashName());

        aksesInternet::create([
            'jenisdaya_id'  => $request->jenisdaya_id,
            'nama'          => $request->nama,
            'gambar'        => $gambar->hashName(),
            'latitude'      => $request->latitude,
            'longitude'     => $request->longitude,
            'provinsi'      => 'kaltim',
            'kota'          => 'balikpapan',
            'alamat'        => $request->alamat,
            'nama_kontak'   => $request->namakontak,
            'email_kontak'  => $request->emailkontak,
            'notelp_kontak' => $request->notelpkontak,
        ]);
        return redirect()->route('aksesinternet.index');
    }

    public function edit(aksesInternet $aksesinternet){
        $jenisSumberDaya = jenisSumberDaya::latest()->get();
        $title = 'Edit Data Akses Internet';
        return view('admin.page.aksesInternet_edit', compact('title','aksesinternet','jenisSumberDaya'));
    }
    public function update(Request $request, aksesInternet $aksesinternet){
        $this->validate($request,[
            'gambar'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/gis', $gambar->hashName());

            Storage::delete('public/gis/'.$aksesinternet->gambar);

            $aksesinternet->update([
                'jenisdaya_id'  => $request->jenisdaya_id,
                'nama'          => $request->nama,
                'gambar'        => $gambar->hashName(),
                'latitude'      => $request->latitude,
                'longitude'     => $request->longitude,
                'provinsi'      => 'kaltim',
                'kota'          => 'balikpapan',
                'alamat'        => $request->alamat,
                'nama_kontak'   => $request->namakontak,
                'email_kontak'  => $request->emailkontak,
                'notelp_kontak' => $request->notelpkontak,
            ]);
        } else {
            $aksesinternet->update([
                'jenisdaya_id'  => $request->jenisdaya_id,
                'nama'          => $request->nama,
                'latitude'      => $request->latitude,
                'longitude'     => $request->longitude,
                'provinsi'      => 'kaltim',
                'kota'          => 'balikpapan',
                'alamat'        => $request->alamat,
                'nama_kontak'   => $request->namakontak,
                'email_kontak'  => $request->emailkontak,
                'notelp_kontak' => $request->notelpkontak,
            ]);
        }
        return redirect()->route('aksesinternet.index');
    }
    public function destroy(aksesInternet $aksesinternet){
        Storage::delete('public/gis'.$aksesinternet->gambar);
        $aksesinternet->delete();
        return redirect()->route('aksesinternet.index');
    }
}
