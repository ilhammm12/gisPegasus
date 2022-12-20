<?php

namespace App\Http\Controllers;

use App\Models\tipeTower;
use Illuminate\Http\Request;

class tipeTowerController extends Controller
{
    public function index(){
        $tipeTower = tipeTower::latest()->paginate(5);
        $title = 'Data Tipe Tower';
        return view('admin.page.tipeTower', compact('title', 'tipeTower'));
    }
    public function create(){
        $title = 'Tambah Tipe Tower';
        return view('admin.page.tipeTower_create', compact('title'));
    }
    public function store(Request $request){
        tipeTower::create([
            'nama'  => $request->nama,
            'model'  => $request->model
        ]);
        return redirect()->route('tipetower.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(tipetower $tipetower){
        $tipetower->delete();
        return redirect()->route('tipetower.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function edit(tipetower $tipetower){
        $title = 'Edit Tipe Tower';
        return view('admin.page.tipeTower_edit', compact('title','tipetower'));
    }
    public function update(Request $request, tipetower $tipetower){
        $tipetower->update([
            'nama'  => $request->nama,
            'model'  => $request->model
        ]);
        return redirect()->route('tipetower.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
