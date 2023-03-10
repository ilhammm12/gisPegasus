@extends('admin.layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <div id="map" style="height: 111.8vh;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Data Terminal</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('terminal.update', $terminal->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Terminal</label>
                            <input name="nama" value="{{ old('nama', $terminal->nama) }}" type="text" class="form-control" placeholder="Masukkan Nama" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Terminal</label>
                            <input name="kode_unik" value="{{ old('kode_unik', $terminal->kode_unik) }}" type="text" class="form-control" placeholder="Masukkan Kode" />
                        </div>
                        <div class="mb-3">
                            <label for="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Masukkan Keterangan"
                            >{{ old('keterangan', $terminal->keterangan) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan alamat"
                            >{{ old('alamat', $terminal->alamat) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penyedia Layanan</label>
                            <select class="form-select" name="penyedia_id">
                                <option selected disabled>Pilih Penyedia</option>
                                @foreach($penyediaLayanan as $pl)
                                    @if (old('penyedia_id',$terminal->penyedia_id) == $pl->id)
                                        <option value="{{$pl->id}}" selected>{{$pl->nama}}</option>
                                    @else
                                        <option value="{{$pl->id}}">{{$pl->nama}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3 justify-content-between">
                            <div style="width: 48%;">
                                <label class="form-label">Latitude</label>
                                <input name="latitude" value="{{ old('latitude', $terminal->latitude) }}" type="number" class="form-control" placeholder="Masukkan Latitude" />
                            </div>
                            <div style="width: 48%;">
                                <label class="form-label">Longitude</label>
                                <input name="longitude" value="{{ old('longitude', $terminal->longitude) }}" type="number" class="form-control" placeholder="Masukkan Longitude" />
                            </div>
                            <div class="form-text">
                                <p class="d-flex mb-0">
                                    <i class="bx bx-info-circle me-1"></i>
                                    <span>Data dapat di isi secara manual atau melalui map</span>
                                </p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" style="display: block!important; width: 100%;">SIMPAN DATA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
