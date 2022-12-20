@extends('admin.layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card">

                        <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang, {{Auth::user()->nama}} 🎉</h5>
                                <p class="mb-4">
                                    Anda telah memasuki sistem Pegasus dengan hak akses sebagai <span class="fw-bold">{{Auth::user()->role->nama}}</span>
                                </p>
                                <p></p>
                            <a href="javascript:;" class="btn btn-outline-primary">Profil Saya</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="{{asset('gis/assets/img/illustrations/man-with-laptop-light.png')}}"
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Sebaran Infrastruktur</h5>
                            <small class="text-muted">Terdata saat ini</small>
                        </div>
                        <div class="dropdown">
                            <button
                            class="btn p-0"
                            type="button"
                            id="orederStatistics"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >
                            <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-left gap-1">
                            <h2 class="mb-2">294</h2>
                            <span>Infrastruktur</span>
                            </div>
                            <div id="orderStatisticsChart"></div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <h6 class="mb-0">BTS Belanja Modal</h6>
                                <small class="text-muted">Base Transceiver Station</small>
                                </div>
                                <div class="user-progress">
                                <small class="fw-semibold">54</small>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <h6 class="mb-0">BTS Belanja Jasa</h6>
                                <small class="text-muted">Base Transceiver Station</small>
                                </div>
                                <div class="user-progress">
                                <small class="fw-semibold">63</small>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <h6 class="mb-0">AI Belanja Modal</h6>
                                <small class="text-muted">Akses Internet</small>
                                </div>
                                <div class="user-progress">
                                <small class="fw-semibold">48</small>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <h6 class="mb-0">AI Belanja Jasa</h6>
                                <small class="text-muted">Akses Internet</small>
                                </div>
                                <div class="user-progress">
                                <small class="fw-semibold">22</small>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <h6 class="mb-0">Terminal Leased Capacity</h6>
                                <small class="text-muted">Terminal</small>
                                </div>
                                <div class="user-progress">
                                <small class="fw-semibold">10</small>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                        <div class="dropdown">
                            <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >
                            <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <small class="text-muted d-block mb-1">Paypal</small>
                                <h6 class="mb-0">Send money</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+82.6</h6>
                                <span class="text-muted">USD</span>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <small class="text-muted d-block mb-1">Wallet</small>
                                <h6 class="mb-0">Mac'D</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+270.69</h6>
                                <span class="text-muted">USD</span>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <small class="text-muted d-block mb-1">Transfer</small>
                                <h6 class="mb-0">Refund</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+637.91</h6>
                                <span class="text-muted">USD</span>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <small class="text-muted d-block mb-1">Credit Card</small>
                                <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">-838.71</h6>
                                <span class="text-muted">USD</span>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <small class="text-muted d-block mb-1">Wallet</small>
                                <h6 class="mb-0">Starbucks</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">+203.33</h6>
                                <span class="text-muted">USD</span>
                                </div>
                            </div>
                            </li>
                            <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                <small class="text-muted d-block mb-1">Mastercard</small>
                                <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">-92.45</h6>
                                <span class="text-muted">USD</span>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-primary"
                                ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                                <h5 class="text-nowrap mb-2">Profile Report</h5>
                                <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                            </div>
                            <div class="mt-sm-auto">
                                <small class="text-success text-nowrap fw-semibold"
                                ><i class="bx bx-chevron-up"></i> 68.2%</small
                                >
                                <h3 class="mb-0">$84,686k</h3>
                            </div>
                            </div>
                            <div id="profileReportChart"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="card mb-4">
		<h4 class="card-header text-center text-uppercase fw-bolder fs-4">Dashboard</h4>
		<div class="card-body">
		  <div class="row">
		    <div class="col-md-6 col-xl-4">
		      <div class="card d-flex flex-row justify-content-center align-items-center bg-primary text-white mb-3">
		        <!-- <div class="card-header">
		          <i class="menu-icon tf-icons bx bxs-cube me-0"></i>
		        </div> -->
		        <div class="card-body pt-4">
		          <h5 class="card-title text-white fs-6 mb-1">Base Transceiver Station (BTS) Belanja Modal</h5>
		          <p class="card-text fs-6">3.092 Lokasi</p>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6 col-xl-4">
		      <div class="card d-flex flex-row justify-content-center align-items-center bg-primary text-white mb-3">
		        <!-- <div class="card-header">
		          <i class="menu-icon tf-icons bx bxs-cube me-0"></i>
		        </div> -->
		        <div class="card-body pt-4">
		          <h5 class="card-title text-white fs-6 mb-1">Base Transceiver Station (BTS) Belanja Jasa</h5>
		          <p class="card-text fs-6">2.092 Lokasi</p>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6 col-xl-4">
		      <div class="card d-flex flex-row justify-content-center align-items-center bg-primary text-white mb-3">
		        <!-- <div class="card-header">
		          <i class="menu-icon tf-icons bx bxs-cube me-0"></i>
		        </div> -->
		        <div class="card-body pt-4">
		          <h5 class="card-title text-white fs-6 mb-1">Reference Terminal Leased Capacity</h5>
		          <p class="card-text fs-6">401 Lokasi</p>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6 col-xl-4">
		      <div class="card d-flex flex-row justify-content-center align-items-center bg-primary text-white mb-3">
		        <!-- <div class="card-header">
		          <i class="menu-icon tf-icons bx bxs-cube me-0"></i>
		        </div> -->
		        <div class="card-body pt-4">
		          <h5 class="card-title text-white fs-6 mb-1">Akses Internet (AI) Belanja Modal</h5>
		          <p class="card-text fs-6">271 Lokasi</p>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6 col-xl-4">
		      <div class="card d-flex flex-row justify-content-center align-items-center bg-primary text-white mb-3">
		        <!-- <div class="card-header">
		          <i class="menu-icon tf-icons bx bxs-cube me-0"></i>
		        </div> -->
		        <div class="card-body pt-4">
		          <h5 class="card-title text-white fs-6 mb-1">Akses Internet (AI) Belanja Jasa</h5>
		          <p class="card-text fs-6">782 Lokasi</p>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6 col-xl-4">
		      <div class="card d-flex flex-row justify-content-center align-items-center bg-primary text-white mb-3">
		        <!-- <div class="card-header">
		          <i class="menu-icon tf-icons bx bxs-cube me-0"></i>
		        </div> -->
		        <div class="card-body pt-4">
		          <h5 class="card-title text-white fs-6 mb-1">Upgrade Sistem Headend</h5>
		          <p class="card-text fs-6">523 Lokasi</p>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
@endsection
