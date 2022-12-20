@extends('admin.layouts.default')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Data User</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama" value="{{ old('nama', $user->nama) }}" type="text" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" value="{{ old('email', $user->email) }}" type="email" class="form-control" placeholder="Masukkan Email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password Lama</label>
                    <input name="password_lama" type="password" class="form-control @error('password_lama') is-invalid @enderror" placeholder="Masukkan Password Lama">
                    @error('password_lama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password Baru</label>
                    <input name="password_baru" type="password" class="form-control  @error('password_baru') is-invalid @enderror" placeholder="Masukkan Password Baru" autocomplete="current-password"/>
                    @error('password_baru')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ulangi Password Baru</label>
                    <input name="password_baru_confirmation" id="password" type="password" class="form-control" placeholder="Ulangi Password Baru">
                </div>

                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select" name="role_id">
                        <option selected disabled>Pilih Role</option>
                        @foreach($role as $rl)
                            @if (old('role_id',$user->role_id) == $rl->id)
                                <option value="{{$rl->id}}" selected>{{$rl->nama}}</option>
                            @else
                                <option value="{{$rl->id}}">{{$rl->nama}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="display: block!important; width: 100%;">SIMPAN DATA</button>
            </form>
        </div>
    </div>
@endsection
