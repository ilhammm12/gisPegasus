@extends('admin.layouts.default')

@section('content')
	<div class="card" style="height:75vh">
                <h5 class="card-header text-center">Data Base Transceiver Station (BTS)</h5>
                <div class="table-responsive text-nowrap" style="height:100%">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="3%">No</th>
                        <th>Nama Tower</th>
                        <th>Jenis Sumber Daya</th>
                        <th>Penyedia Layanan</th>
                        <th>Tipe Site</th>
                        <th>Tipe Tower</th>
                        <th>Gambar</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @forelse ($btsTower as $bts)
                      <tr>
                        <td class="text-center">1</td>
                        <td><strong>{{ $bts->nama }}</strong></td>
                        <td><strong>{{ $bts->jenissumberdaya->nama . " ". $bts->jenissumberdaya->kapasitassumberdaya->kapasitas }}</strong></td>
                        <td><strong>{{ $bts->penyedialayanan->nama }}</strong></td>
                        <td><strong>{{ $bts->tipesite->nama }}</strong></td>
                        <td><strong>{{ $bts->tipetower->nama }}</strong></td>
                        <td>
                            <img src="{{ Storage::url('public/gis/').$bts->gambar}}" class="rounded" style="width: 100px; height: 100px; object-fit:cover;">
                        </td>
                        <td>{{ $bts->alamat }}</td>
                        <td><span class="badge bg-label-primary me-1 fw-bold">SHOW</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                                <div class="dropdown-menu">
                                  <form onsubmit="return confirm('Hapus data ?');" action="{{ route('btstower.destroy', $bts->id) }}" method="POST">
                                    <a class="dropdown-item" href="{{ route('btstower.edit', $bts->id) }}"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    @CSRF
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item">
                                      <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                  </form>
                                </div>

                          </div>
                        </td>
                      </tr>
                      @empty
                        <div class="alert alert-danger mx-4">
                            Data Belum Tersedia
                        </div>
                      @endforelse
                    </tbody>
                  </table>
                  {{-- {{ $btsTower->links() }} --}}
                </div>
              </div>
@endsection
