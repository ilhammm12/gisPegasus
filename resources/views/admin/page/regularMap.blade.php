@extends('admin.layouts.default')

@section('content')
	<div class="d-flex justify-content-between align-items-center mb-3 mt-4">
	    <div>
	      <h4 class="mb-0 text-uppercase fw-bolder fs-4">Regular Maps</h4>
	      <p class="fs-6 mb-0 text-grey">Terakhir di-update : 30/06/2022 11:35</p>
	    </div>
	    <div class="d-flex">
	      <div class="ms-3">
	        <input id="defaultInput" class="form-control" type="text" placeholder="Pencarian" />
	      </div>
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