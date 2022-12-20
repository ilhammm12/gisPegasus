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
                    <h5 class="mb-0">Edit Data Akses Internet</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('aksesinternet.update', $aksesinternet->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Akses Internet</label>
                            <input name="nama" value="{{ old('nama', $aksesinternet->nama) }}" type="text" class="form-control" placeholder="Ex. Tower Manggar1" />
                        </div>
                        <div class="mb-3">
                            <label for="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <div class="input-group mb-3 justify-content-between">
                            <div style="width: 48%;">
                                <label class="form-label">Latitude</label>
                                <input name="latitude" value="{{ old('latitude', $aksesinternet->latitude) }}" type="number" class="form-control" placeholder="Masukkan Luas Lahan" />
                            </div>
                            <div style="width: 48%;">
                                <label class="form-label">Longitude</label>
                                <input name="longitude" value="{{ old('longitude', $aksesinternet->longitude) }}" type="number" class="form-control" placeholder="Masukkan Luas Lahan" />
                            </div>
                            <div class="form-text">
                                <p class="d-flex mb-0">
                                    <i class="bx bx-info-circle me-1"></i>
                                    <span>Data dapat di isi secara manual atau melalui map</span>
                                </p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Sumber Daya</label>
                            <select class="form-select" name="jenisdaya_id">
                                <option selected disabled>Pilih Jenis</option>
                                @foreach($jenisSumberDaya as $jsd)
                                    @if (old('jenisdaya_id',$aksesinternet->jenisdaya_id) == $jsd->id)
                                        <option value="{{$jsd->id}}" selected>{{$jsd->nama." | ".$jsd->kapasitassumberdaya->kapasitas}}</option>
                                    @else
                                        <option value="{{$jsd->id}}">{{$jsd->nama." | ".$jsd->kapasitassumberdaya->kapasitas}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-4 justify-content-between">
                            <div style="width: 48%;">
                                <label class="form-label">Provinsi</label>
                                <select class="form-select">
                                    <option selected disabled>Pilih Provinsi</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div style="width: 48%;">
                                <label class="form-label">Kota</label>
                                <select class="form-select">
                                    <option selected disabled>Pilih Kota</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat"
                            >{{ old('alamat', $aksesinternet->alamat) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Kontak</label>
                            <input name="namakontak" value="{{ old('nama_kontak', $aksesinternet->nama_kontak) }}" type="text" class="form-control" placeholder="Masukkan Nama" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Kontak</label>
                            <input name="emailkontak" value="{{ old('email_kontak', $aksesinternet->email_kontak) }}" type="email" class="form-control" placeholder="Masukkan Email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No.Telp Kontak</label>
                            <input name="notelpkontak" value="{{ old('notelp_kontak', $aksesinternet->notelp_kontak) }}" type="number" class="form-control" placeholder="Masukkan Nomor Telpon" />
                        </div>


                        <button type="submit" class="btn btn-primary btn-lg" style="display: block!important; width: 100%;">SIMPAN DATA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
