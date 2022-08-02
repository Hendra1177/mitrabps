<!DOCTYPE html>
<html lang="en">
@can('isAdmin')

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('template/assets/img/BPS.png')}}">
  <title>
    Mitra Badan Pusat Statistik Kabupaten Jombang
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('template/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('template/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('template/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('template/assets/css/argon-dashboard.css')}}" rel="stylesheet" />
  <link id="pagestyle" href="{{asset('template/assets/DataTables/datatables.min.css')}}" rel="stylesheet" />
  <link id="pagestyle" href="{{asset('template/assets/DataTables/Button-2.2.3/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="g-sidenav-show bg-white">
  <div class="min-height-300 bg-white position-absolute w-100">
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('template/assets/img/sp2.jpg')}}" class="img-responsive center-block d-block mx-auto" style="height: 300px;width: 1536px;">
        </div>
        <div class="carousel-item">
          <img src="{{asset('template/assets/img/sensus3.png')}}" class="img-responsive center-block d-block mx-auto" style="height: 300px;width: 1536px;">
        </div>
        <div class="carousel-item">
          <img src="{{asset('template/assets/img/bps people.jpg')}}" class="img-responsive center-block d-block mx-auto" style="height: 300px;width: 1536px;">
        </div>
        <div class="carousel-item">
          <img src="{{asset('template/assets/img/sp3.jpg')}}" class="img-responsive center-block d-block mx-auto" style="height: 300px;width: 1536px;">
        </div>
      </div>


      <!-- Left and right controls -->
      <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a> -->

    </div>
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)"></div>
  </div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="{{asset('template/assets/img/BPS.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">BPS JOMBANG</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/admin/dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="/admin/kegiatan">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kegiatan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/admin/mitra">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mitra</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/admin/perjanjian">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Perjanjian</span>
          </a>
        </li>

        </li>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Kegiatan</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tambah Kegiatan</h6>
        </nav>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white font-weight-bold " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          <!-- <li class="nav-item ">
              <a href="/login" class="nav-link text-white font-weight-bold px-7 ">
                Logout
              </a>
            </li> -->

          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- End Navbar -->
    @yield('content')

    <!--   Core JS Files   -->
    <script src="{{asset('template/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('template/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('template/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('template/assets/js/plugins/chartjs.min.js')}}"></script>
    <script src="{{asset('template/assets/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('template/assets/DataTables/Button-2.2.3/js/buttons.print.js')}}"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#datatables').DataTable();
      });
      
      // $(document).ready(function() {
      //   $('#datatables').DataTable({
      //     dom: 'Bfrtip',
      //     buttons: [
      //       'print'
      //     ]
      //   });
      // });
    </script>





    <script>
      var ctx1 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
      gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
      new Chart(ctx1, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#5e72e4",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#fbfbfb',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#ccc',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>

</body>
@endcan

</html>