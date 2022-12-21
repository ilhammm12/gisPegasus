@extends('admin.layouts.default')

@section('content')
	<div class="card" style="height:75vh">
                <h5 class="card-header text-center">Data Tipe Tower</h5>
                <div class="table-responsive text-nowrap" style="height:100%">
                  <table class="table">
                    <thead>
                      <tr>
                        <th width="3%">No</th>
                        <th>Nama</th>
                        <th>Model</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $no = 1; ?>
                      @forelse ($tipeTower as $tower)
                      <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td><strong>{{ $tower->nama }}</strong></td>
                        <td>{{ $tower->model }}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                                <div class="dropdown-menu">
                                  <form onsubmit="return confirm('Hapus data ?');" action="{{ route('tipetower.destroy', $tower->id) }}" method="POST">
                                    <a class="dropdown-item" href="{{ route('tipetower.edit', $tower->id) }}"
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
                  {{ $tipeTower->links() }}
                </div>
              </div>
@endsection
