@extends('admin.layouts.default')

@section('content')
    {{-- <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 25rem!important;">
            <div class="modal-content">
                <div class="modal-header">
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
                </div>
                <div class="modal-body pt-0">
                <div class="text-center">
                    <h5 class="modal-title fs-4 fw-bolder text-primary" id="modalCenterTitle">PEGASUS</h5>
                    <h6 class="fs-6 text-secondary mb-4">Masuk Akun</h6>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="nameWithTitle" class="form-label">Email</label>
                            <input type="email" name="email" id="nameWithTitle" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" required autofocus value="{{ old('email')}}"/>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mb-4">
                        <label for="nameWithTitle" class="form-label">Password</label>
                        <input
                            type="password"
                            name="password"
                            id="nameWithTitle"
                            class="form-control"
                            placeholder="Masukkan Password"
                            required
                        />
                        </div>
                        <div class="col-12">
                        <a href="index2.html" class="d-grid">
                            <input type="submit" class="btn btn-primary" value="submit">
                        </a>
                        <div class="text-center mt-2">
                            <a href="#">Lupa Kata Sandi</a>
                        </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div> --}}
	<div class="d-flex justify-content-between align-items-center mb-3 mt-4">
	    <div>
	      <h4 class="mb-0 text-uppercase fw-bolder fs-4">Regular Maps</h4>
	      <p class="fs-6 mb-0 text-grey">Terakhir di-update : 30/06/2022 11:35</p>
	    </div>
	    <div class="d-flex">
	      <div class="ms-3">
	        <select id="defaultSelect" class="form-select">
	          <option>Filter By Province</option>
	          <option value="1">One</option>
	          <option value="2">Two</option>
	          <option value="3">Three</option>
	        </select>
	      </div>
	      <div class="ms-3">
	        <select id="defaultSelect" class="form-select">
	          <option>Filter By Project</option>
	          <option value="1">One</option>
	          <option value="2">Two</option>
	          <option value="3">Three</option>
	        </select>
	      </div>
	    </div>
	  </div>
	  <div class="card mb-4">
	    <div class="card-body">
	      <!-- <div class="mapouter"><div class="gmap_canvas" style="width: 100%;"><iframe width="100%" height="552" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:552px;width:100%;}</style><a href="https://www.embedgooglemap.net">how to embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:552px;width:1059px;}</style></div></div> -->
	      <div id="map" style="height: 60vh;">

	      </div>
	    </div>
	  </div>
@endsection
