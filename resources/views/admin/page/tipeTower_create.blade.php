@extends('admin.layouts.default')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tambah Data Tipe Tower</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('tipetower.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Tipe</label>
                    <input name="nama" type="text" class="form-control" placeholder="Ex. Tower Manggar1" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Model Tipe Tower</label>
                    <input name="model" type="text" class="form-control" placeholder="Ex. Tower Manggar1" />
                </div>
                <button type="submit" class="btn btn-primary btn-lg" style="display: block!important; width: 100%;">SIMPAN DATA</button>
            </form>
        </div>
    </div>
@endsection