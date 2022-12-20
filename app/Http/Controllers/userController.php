<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(5);
        $title = 'Data User';
        return view('admin.page.user', compact('title','users'));
    }
    public function create(){
        $role = Role::latest()->get();
        $title = 'Tambah User';
        return view('admin.page.user_create', compact('title','role'));
    }
    public function store(Request $request){
        $request->validate([
            'password'  => 'required|confirmed|min:6'
        ]);
        User::create([
            'nama'  => $request->nama,
            'email'  => $request->email,
            'password'  => Hash::make($request->password),
            'role_id'  => $request->role_id
        ]);
        return redirect()->route('user.index');
    }
    public function destroy(user $user){
        $user->delete();
        return redirect()->route('user.index');
    }
    public function edit(user $user){
        $role = Role::latest()->get();
        $title = 'Edit User';
        return view('admin.page.user_edit', compact('title','user','role'));
    }
    public function update(Request $request, user $user){
        # Validation
        $request->validate([
            // 'password_lama' => '',
            'password_baru' => 'confirmed',
        ]);
        if($request->password_lama){
            if(!Hash::check($request->password_lama, $user->password)){
                // dd(Hash::check($request->password_lama, $user->password));
                return back()->with("error", "Password Lamamu Salah");
            }
            $user->update([
                'nama'  => $request->nama,
                'email'  => $request->email,
                'password'  => Hash::make($request->password_baru),
                'role_id'  => $request->role_id
            ]);
        }else{
            $user->update([
                'nama'  => $request->nama,
                'email'  => $request->email,
                'role_id'  => $request->role_id
            ]);
        }
        return redirect()->route('user.index');
    }
}
