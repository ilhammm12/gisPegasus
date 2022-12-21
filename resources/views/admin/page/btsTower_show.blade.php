@extends('admin.layouts.default')

@section('content')
    {{-- <div class="card mb-4">
        <div class="card-body"> --}}
            <div class="row mb-2 justify-content-center background-light" >
                <div class="col-md-10" >
                    <div style="background : #fff!important" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Tower BTS</strong>
                        <h3 class="mb-0">{{ $btstower->nama }}</h3>
                        <div class="mb-1 text-muted">{{ $btstower->alamat }}</div>
                        <p class="card-text mb-auto">

                            <p class="title fs-6">
                                Tinggi Tower {{ $btstower->tinggi_tower }}M,
                                Luas Lahan {{ $btstower->lahan }}M2,
                                Radius jaringan {{ $btstower->radius }}M,
                                Jenis Sumber Daya {{ $btstower->jenissumberdaya->nama . " ". $btstower->jenissumberdaya->kapasitassumberdaya->kapasitas  }},
                                Penyedia Layanan {{ $btstower->penyedialayanan->nama }},
                                tipe site {{ $btstower->tipesite->nama }},
                                tipe tower {{ $btstower->tipetower->nama }},
                                nilai kontrak {{ $btstower->tipetower->nilai_kontrak }},
                            </p>
                        </p>
                        </div>
                        <div class="col-2 d-none d-lg-block">
                            <img src="{{ Storage::url('public/gis/').$btstower->gambar}}" class="rounded" style="width: 100%; height: 100%; object-fit:cover;">
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <div id="map2" style="height: 30vh;"></div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div>
    </div> --}}

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

@endsection
