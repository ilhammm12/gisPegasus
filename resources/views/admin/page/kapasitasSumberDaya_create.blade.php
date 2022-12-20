@extends('admin.layouts.default')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tambah Data Kapasitas Sumber Daya</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('kapasitassumberdaya.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kapasitas Sumber Daya (VA)</label>
                    <input name="kapasitas" type="number" class="form-control" placeholder="Masukkan Kapasitas" />
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
