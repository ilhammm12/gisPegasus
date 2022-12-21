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
                    <h5 class="mb-0">Tambah Data Terminal</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('terminal.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Terminal</label>
                            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Terminal</label>
                            <input name="kode_unik" type="text" class="form-control" placeholder="Masukkan Kode" />
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-around align-items-center">
                                <img id="blah" style="object-fit: cover; border-radius: 5px;" alt="your image" width="70" height="70" src="https://www.pacifictrellisfruit.com/wp-content/uploads/2016/04/default-placeholder-300x300.png" alt="">
                                <div>
                                    <label for="font-weight-bold">Gambar</label>
                                    <input type="file" class="form-control" name="gambar" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Masukkan Keterangan"
                            ></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan alamat"
                            ></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penyedia Layanan</label>
                            <select class="form-select" name="penyedia_id">
                                <option selected disabled>Pilih Penyedia</option>
                                @foreach($penyediaLayanan as $pl)
                                    <option value="{{$pl->id}}">{{$pl->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3 justify-content-between">
                            <div style="width: 48%;">
                                <label class="form-label">Latitude</label>
                                <input id="inputlat" name="latitude" type="text" class="form-control" placeholder="Masukkan Luas Lahan" />
                            </div>
                            <div style="width: 48%;">
                                <label class="form-label">Longitude</label>
                                <input id="inputlng" name="longitude" type="text" class="form-control" placeholder="Masukkan Luas Lahan" />
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
