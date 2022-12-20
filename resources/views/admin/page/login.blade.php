<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
  />

  <title>{{$title}} - Pegasus</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{asset('gis/assets/img/favicon/favicon.ico')}}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"
  />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{asset('gis/assets/vendor/fonts/boxicons.css')}}" />

  {{-- <link rel="stylesheet" href="{{asset('sneat/assets/vendor/fonts/boxicons.css')}}" /> --}}

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset('gis/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset('gis/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset('gis/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{asset('gis/assets/css/demo.css')}}" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{asset('gis/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

  <link rel="stylesheet" href="{{asset('gis/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
 integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
 crossorigin=""/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.css" integrity="sha384-P9DABSdtEY/XDbEInD3q+PlL+BjqPCXGcF8EkhtKSfSTr/dS5PBKa9+/PMkW2xsY" crossorigin="anonymous">
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" /> --}}
  <!-- Page CSS -->
  <link rel="stylesheet" href="{{asset('gis/assets/css/L.Control.Locate.min.css')}}" />
  <link rel="stylesheet" href="{{asset('gis/assets/css/leaflet-search.css')}}" />
  <link rel="stylesheet" href="{{asset('gis/assets/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('gis/assets/vendor/css/pages/page-auth.css')}}" />
  <!-- Helpers -->
  <script src="{{asset('gis/assets/vendor/js/helpers.js')}}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('gis/assets/js/config.js')}}"></script>
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
  integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
  crossorigin=""></script>
  <script src="https://cdn.jsdelivr.net/gh/gokertanrisever/leaflet-ruler@master/src/leaflet-ruler.js" integrity="sha384-N2S8y7hRzXUPiepaSiUvBH1ZZ7Tc/ZfchhbPdvOE5v3aBBCIepq9l+dBJPFdo1ZJ" crossorigin="anonymous"></script>

</head>
<body>
	{{-- HEADER --}}
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <div class="layout-page ps-0">

          <div class="content-wrapper">
            <div class="container-xxl container-p-y">
	{{-- MAIN --}}
    <div class="row justify-content-center align-items-center">
      <div class="col-5">
          <div class="authentication-wrapper authentication-basic container-p-y">
              <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                  <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                      <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                          <svg
                            width="25"
                            viewBox="0 0 25 42"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <defs>
                              <path
                                d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                id="path-1"
                              ></path>
                              <path
                                d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                id="path-3"
                              ></path>
                              <path
                                d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                id="path-4"
                              ></path>
                              <path
                                d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                id="path-5"
                              ></path>
                            </defs>
                            <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                <g id="Icon" transform="translate(27.000000, 15.000000)">
                                  <g id="Mask" transform="translate(0.000000, 8.000000)">
                                    <mask id="mask-2" fill="white">
                                      <use xlink:href="#path-1"></use>
                                    </mask>
                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                    <g id="Path-3" mask="url(#mask-2)">
                                      <use fill="#696cff" xlink:href="#path-3"></use>
                                      <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                    </g>
                                    <g id="Path-4" mask="url(#mask-2)">
                                      <use fill="#696cff" xlink:href="#path-4"></use>
                                      <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                    </g>
                                  </g>
                                  <g
                                    id="Triangle"
                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                                  >
                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span class="app-brand-text demo text-body fw-bolder text-uppercase">PEGASUS</span>
                      </a>
                    </div>
                    <!-- /Logo -->
                    <div class="text-center mt-4">
                      <h5 class="mb-2">Selamat Datangs 👋</h5>
                      <p class="mb-4">Please sign-in to your account and start the adventure</p>
                    </div>
                      {{-- @if(session()->has('success'))
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
                      @endif --}}

                    @if(Session::has('status'))
                          <div class="alert alert-danger" role="alert">
                              {{Session::get('message')}}
                          </div>
                    @endif
                    <form id="formAuthentication" class="mb-3" action="/masuk" method="POST">
                      @csrf
                      <div class="mb-3">
                          <label for="nameWithTitle" class="form-label">Email</label>
                          <input type="email" name="email" id="nameWithTitle" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" required autofocus value="{{ old('email')}}"/>
                          @error('email')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="mb-4 form-password-toggle">
                        <div class="d-flex justify-content-between">
                          <label for="nameWithTitle" class="form-label">Password</label>
                        </div>
                        <div class="input-group input-group-merge">
                          <input
                              type="password"
                              name="password"
                              id="nameWithTitle"
                              class="form-control"
                              placeholder="Masukkan Password"
                              required
                          />
                          <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                      </div>
                      <div class="mb-3">
                        {{-- <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button> --}}
                        <input type="submit" class="btn btn-primary w-100" value="Masuk">
                      </div>
                    </form>

                    <p class="text-center">
                      {{-- <span>New on our platform?</span> --}}
                      <a href="auth-register-basic.html">
                        <span>Lupa Password ?</span>
                      </a>
                    </p>
                  </div>
                </div>
                <!-- /Register -->
              </div>
            </div>
      </div>
  </div>
	{{-- FOOTER --}}
            </div>
          </div>
          </div>
          </div>
          </div>

          <script src="{{asset('gis/assets/vendor/libs/jquery/jquery.js')}}"></script>
          <script src="{{asset('gis/assets/vendor/libs/popper/popper.js')}}"></script>
          <script src="{{asset('gis/assets/vendor/js/bootstrap.js')}}"></script>
          <script src="{{asset('gis/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

          <script src="{{asset('gis/assets/vendor/js/menu.js')}}"></script>
          <!-- endbuild -->
          <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>
          <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
          <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/src/L.Control.Locate.min.js"></script>
          <script src="{{asset('gis/assets/js/leaflet-search.js')}}"></script>
          <script src="{{asset('gis/assets/js/bar.geojson.js')}}"></script>

          <!-- Vendors JS -->
          <script src="{{asset('gis/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

          <!-- Main JS -->
          <script src="{{asset('gis/assets/js/main.js')}}"></script>
          <script src="{{asset('gis/assets/js/maps.js')}}"></script>

          <!-- Page JS -->
          <script src="{{asset('gis/assets/js/dashboards-analytics.js')}}"></script>

          <!-- Place this tag in your head or just before your close body tag. -->
          <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>
</html>