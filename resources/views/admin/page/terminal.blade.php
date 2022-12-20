@extends('admin.layouts.default')

@section('content')
	<div class="card" style="height:75vh">
                <h5 class="card-header text-center">Data Terminal</h5>
                <div class="table-responsive text-nowrap" style="height:100%">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="3%">No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Penyedia Layanan</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @forelse ($terminal as $term)
                      <tr>
                        <td class="text-center">1</td>
                        <td><strong>{{ $term->kode_unik }}</strong></td>
                        <td><strong>{{ $term->nama }}</strong></td>
                        <td><strong>{{ $term->penyedialayanan->nama }}</strong></td>
                        <td>
                          <img src="{{ Storage::url('public/gis/').$term->gambar}}" class="rounded" style="width: 100px; height: 100px; object-fit:cover;">
                        </td>
                        <td>{{ $term->keterangan }}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                                <div class="dropdown-menu">
                                  <form onsubmit="return confirm('Hapus data ?');" action="{{ route('terminal.destroy', $term->id) }}" method="POST">
                                    <a class="dropdown-item" href="{{ route('terminal.edit', $term->id) }}"
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
                  {{ $terminal->links() }}
                </div>
              </div>
@endsection
