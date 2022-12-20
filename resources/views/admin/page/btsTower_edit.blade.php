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
                    <h5 class="mb-0">Edit Data BTS</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form action="{{ route('btstower.update', $btstower->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Tower</label>
                            <input name="nama" value="{{ old('nama', $btstower->nama) }}" type="text" class="form-control" placeholder="Ex. Tower Manggar1" />
                        </div>
                        <div class="mb-3">
                            <label for="font-weight-bold">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tinggi Tower (M)</label>
                            <input name="tinggitower" value="{{ old('tinggi_tower', $btstower->tinggi_tower) }}" type="number" class="form-control" placeholder="Masukkan Tinggi" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Luas Lahan (M<sup>2</sup>)</label>
                            <input name="luaslahan" value="{{ old('lahan', $btstower->lahan) }}" type="number" class="form-control" placeholder="Masukkan Luas Lahan" />
                        </div>
                        <div class="input-group mb-3 justify-content-between">
                            <div style="width: 48%;">
                                <label class="form-label">Latitude</label>
                                <input name="latitude" value="{{ old('latitude', $btstower->latitude) }}" type="text" class="form-control" placeholder="Masukkan Luas Lahan" />
                            </div>
                            <div style="width: 48%;">
                                <label class="form-label">Longitude</label>
                                <input name="longitude" value="{{ old('longitude', $btstower->longitude) }}" type="text" class="form-control" placeholder="Masukkan Luas Lahan" />
                            </div>
                            <div class="form-text">
                                <p class="d-flex mb-0">
                                    <i class="bx bx-info-circle me-1"></i>
                                    <span>Data dapat di isi secara manual atau melalui map</span>
                                </p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Radius (M)</label>
                            <input name="radius" value="{{ old('radius', $btstower->radius) }}" type="number" class="form-control" placeholder="Masukkan Radius" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat">{{ old('alamat', $btstower->alamat) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nilai Kontrak</label>
                            <input name="nilaikontrak" value="{{ old('nilai_kontrak', $btstower->nilai_kontrak) }}" type="number" class="form-control" placeholder="Masukkan Nilai" />
                        </div>
                        <div class="input-group mb-4 justify-content-between">
                            <div style="width: 48%;">
                                <label class="form-label">Jenis Sumber Daya</label>
                                <select class="form-select" name="jenisdaya_id">
                                    <option selected disabled>Pilih Jenis</option>
                                    @foreach($jenisSumberDaya as $jsd)
                                        @if (old('jenisdaya_id',$btstower->jenisdaya_id) == $jsd->id)
                                            <option value="{{$jsd->id}}" selected>{{$jsd->nama." | ".$jsd->kapasitassumberdaya->kapasitas}}</option>
                                        @else
                                            <option value="{{$jsd->id}}">{{$jsd->nama." | ".$jsd->kapasitassumberdaya->kapasitas}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div style="width: 48%;">
                                <label class="form-label">Penyedia Layanan</label>
                                <select class="form-select" name="penyedia_id">
                                    <option selected disabled>Pilih Penyedia</option>
                                    @foreach($penyediaLayanan as $pl)
                                        @if (old('penyedia_id',$btstower->penyedia_id) == $pl->id)
                                            <option value="{{$pl->id}}" selected>{{$pl->nama}}</option>
                                        @else
                                            <option value="{{$pl->id}}">{{$pl->nama}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-4 justify-content-between">
                            <div style="width: 48%;">
                                <label class="form-label">Tipe Site</label>
                                <select class="form-select" name="tipesite_id">
                                    <option selected disabled>Pilih Tipe Site</option>
                                    @foreach($tipeSite as $ts)
                                        @if (old('tipesite_id',$btstower->tipesite_id) == $ts->id)
                                            <option value="{{$ts->id}}" selected>{{$ts->nama}}</option>
                                        @else
                                            <option value="{{$ts->id}}">{{$ts->nama}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div style="width: 48%;">
                                <label class="form-label">Tipe Tower</label>
                                <select class="form-select" name="tipetower_id">
                                    <option selected disabled>Pilih Tipe Tower</option>
                                    @foreach($tipeTower as $tt)
                                        @if (old('tipetower_id',$btstower->tipetower_id) == $tt->id)
                                            <option value="{{$tt->id}}" selected>{{$tt->nama}}</option>
                                        @else
                                            <option value="{{$tt->id}}">{{$tt->nama}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
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
                        <button type="submit" class="btn btn-primary btn-lg" style="display: block!important; width: 100%;">SIMPAN DATA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
