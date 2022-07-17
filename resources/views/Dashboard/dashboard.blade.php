@extends ('layouts.master')
@section('content')
<main class="main-content position-relative border-radius-lg ps">
  <div class="container-fluid py-4">
    <h1 class="my-6 text-6x5 font-bold text-white text-center">
      SELAMAT DATANG DI KEMITRAAN BPS JOMBANG
    </h1>
  </div>

  <div class="container-fluid py-3">
    <div class="card-deck ">
      <div class="row">
        <div class="col ">
          <div class="card">
            <div class="card-body  p-3 bg-yellow">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Mitra Terupdate</p>
                    <h5 class="font-weight-bolder font-color-white">
                      30 orang
                    </h5>

                  </div>
                </div>
                <div class="col-4 text-end">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body rounded-3 p-3 bg-info">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Kegiatan Terbaru</p>
                    <h5 class="font-weight-bolder">
                      30 Kegiatan
                    </h5>

                  </div>
                </div>
                <div class="col-4 text-end">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">

    </div>
    <div class="col">
    </div>

    <div class="col">
      <div class="card">
        <div class="card bg-gradient-success">
          <div class="card-header border-0">

            <h3 class="card-title">
              <i class="far fa-calendar-alt"></i>
              Calendar
            </h3>
            <!-- tools card -->
            <div class="card-tools">
              <!-- button with a dropdown -->
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"
                  data-offset="-52">
                  <i class="fas fa-bars"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a href="#" class="dropdown-item">Add new event</a>
                  <a href="#" class="dropdown-item">Clear events</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">View calendar</a>
                </div>
              </div>
              <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
          </div>
        </div>
        </ </div>
</main>

@endsection