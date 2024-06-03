<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="{{asset('admin/css/dataTables.bootstrap5.min.css')}}" />
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Admin | @yield('title')</title>
  @stack('css')
</head>

<body>
  @if (session()->has('success'))
  <script>
    Swal.fire(
      'Berhasil',
      "{!!Session::get('success')!!}",
      'success'
    )
  </script>
  @endif
  @if (session()->has('error'))
  <script>
    Swal.fire(
      'Oopss',
      "{!!Session::get('error')!!}",
      'error'
    )
  </script>
  @endif
  @if (session()->has('warning'))
  <script>
    Swal.fire(
      'Maaf',
      "{!!Session::get('warning')!!}",
      'warning'
    )
  </script>
  @endif
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #e7272d;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="{{url('/')}}">E- Resto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- END NAVIGATION BAR ATAS -->


  <!-- SIDEBAR -->

  <div class="offcanvas offcanvas-start sidebar-nav bg" tabindex="-1" id="sidebar" style="background-color: #343a40;">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav"> <br>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              Sajian Data
            </div>
          </li>
          <li>
            <a href="{{route('pengelola.dashboard')}}" class="nav-link px-3 @yield('dashboard')">
              <span class="me-2"><i class="bi bi-briefcase"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          @if (Auth::user()->role_id != 2 && Auth::user()->role_id != 4)
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Order
              </div>
            </li>
            @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 3)
              <li>
                <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts1">
                  <span class="me-2"><i class="bi bi-layout-split"></i></span>
                  <span>Pesanan</span>
                  <span class="ms-auto">
                    <span class="right-icon">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>
                <div class="@yield('collapsePesan')" id="layouts1">
                  <ul class="navbar-nav ps-3">
                    @if (Auth::user()->role_id == 3)
                    <li>
                      <a href="{{route('pengelola.pesanan.masuk')}}" class="nav-link px-3 @yield('pesananMasuk')">
                        <span class="me-2"><i class="bi bi-cart"></i></span>
                        <span>Pesanan Masuk</span>
                      </a>
                    </li>
                    @endif
                    <li>
                      <a href="{{route('pengelola.pesanan.rekap')}}" class="nav-link px-3 @yield('rekapPesanan')">
                        <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                        <span>Rekap Pesanan</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            @endif
            @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 5 || Auth::user()->role_id == 4)
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts2">
                <span class="me-2"><i class="bi bi-people"></i></span>
                <span>Waiters</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="@yield('collapseWaiters')" id="layouts2">
                <ul class="navbar-nav ps-3">
                  @if (Auth::user()->role_id == 5)
                  <li>
                    <a href="{{route('pengelola.monitoring')}}" class="nav-link px-3 @yield('monitoring')">
                      <span class="me-2"><i class="bi bi-eye"></i></span>
                      <span>Monitoring Waiters</span>
                    </a>
                  </li>
                  @endif
                  @if (Auth::user()->role_id == 1)
                    <li>
                      <a href="{{route('pengelola.daftarWaiters')}}" class="nav-link px-3 @yield('daftarWaiters')">
                        <span class="me-2"><i class="bi bi-person-badge"></i></span>
                        <span>Daftar Waiters</span>
                      </a>
                    </li>
                  @endif
                </ul>
              </div>
            </li>
            @endif
            <li class="my-4">
              <hr class="dropdown-divider bg-light" />
            </li>

          @endif
          @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Content
            </div>
          </li>
          <li>
            <a href="{{route('pengelola.cms.menu')}}" class="nav-link px-3 @yield('daftarMenu')">
              <span class="me-2"><i class="bi bi-list-ul"></i></span>
              <span>Menu Resto</span>
            </a>
          </li>
          <li>
            <a href="{{route('pengelola.cms.daftar-meja')}}" class="nav-link px-3 @yield('daftarMeja')">
              <span class="me-2"><i class="bi bi-person-fill"></i></span>
              <span>Daftar Meja</span>
            </a>
          </li>
          @if (Auth::user()->role->nama_role == 'Eksekutif' || Auth::user()->role->nama_role == 'Media Promotion')
          <li>
            <a href="{{route('pengelola.editlandingpage')}}" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-shop"></i></span>
              <span>Landing Page</span>
            </a>
          </li>
          <li>
            <a href="{{route('pengelola.pesanMasuk')}}" class="nav-link px-3 @yield('pesanMasuk')">
              <span class="me-2"><i class="bi bi-chat-square-text"></i></span>
              <span>Pesan Masuk</span>
            </a>
          </li>
          @endif
          @endif
        </ul>
      </nav>
    </div>
  </div>

  <!-- END SIDEBAR -->

  <!-- CONTENT -->

  @yield ('content')

  <!-- END CONTENT -->

  <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="{{asset('admin/js/jquery-3.5.1.js')}}"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('admin/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('admin/js/script.js')}}"></script>
  @stack('js')
</body>

</html>