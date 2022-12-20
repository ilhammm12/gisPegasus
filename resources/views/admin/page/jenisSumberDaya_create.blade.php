@extends('admin.layouts.default')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tambah Data Jenis Sumber Daya</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('jenissumberdaya.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Jenis</label>
                    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Kapasitas Sumber Daya</label>
                    <select class="form-select" name="kapasitasdaya_id">
                        <option selected disabled>Pilih Kapasitas</option>
                        @foreach($kapasitasSumberDaya as $ksd)
                            <option value="{{$ksd->id}}">{{$ksd->kapasitas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control" placeholder="Masukkan Keterangan"
                    ></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="display: block!important; width: 100%;">SIMPAN DATA</button>
            </form>
        </div>
    </div>
@endsection
