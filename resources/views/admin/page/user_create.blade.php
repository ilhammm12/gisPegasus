@extends('admin.layouts.default')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tambah User</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Masukkan Email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Masukkan Password" required autocomplete="current-password"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Ulangi Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ulangi Password" name="password_confirmation" required autocomplete="current-password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select" name="role_id">
                        <option selected disabled>Pilih Role</option>
                        @foreach($role as $rl)
                            <option value="{{$rl->id}}">{{$rl->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="display: block!important; width: 100%;">SIMPAN DATA</button>
            </form>
        </div>
    </div>
@endsection
