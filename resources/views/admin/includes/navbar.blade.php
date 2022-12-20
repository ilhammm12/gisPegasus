          <nav class="navbar navbar-example navbar-expand-lg bg-white">
              <div class="container-fluid">

                <div class="collapse navbar-collapse justify-content-between" id="navbar-ex-3">
                  <span></span>
                  <div class="navbar-nav">
                    <a class="navbar-brand" href="javascript:void(0)">
                      <img src="{{asset('gis/assets/img/pegasus.png')}}" alt="" height="40px">
                    </a>
                  </div>

                  <form onsubmit="return false" class="my-3">

                    @if (Auth::user())
                      <a href="/keluar">
                        <button
                            type="button"
                            class="btn btn-outline-danger"
                          >
                            Keluar
                          </button>
                      </a>
                    @else
                      <a href="/masuk">
                        {{-- <button class="btn btn-outline-primary" type="button">Masuk</button> --}}
                        <button
                            type="button"
                            class="btn btn-outline-primary"
                          >
                            Masuk
                          </button>
                        {{-- <button class="btn btn-outline-danger" type="button">Keluar</button> --}}
                      </a>
                    @endif
                  </form>
                </div>
              </div>
            </nav>
