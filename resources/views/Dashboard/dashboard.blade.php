@extends ('layouts.master')
@section('content')
<main class="main-content position-relative border-radius-lg ps">
  <!-- <div class="container-fluid py-4"> -->
    <h1 class="my-6 text-6x5 font-bold text-white text-center">
      SELAMAT DATANG DI KEMITRAAN BPS JOMBANG
    </h1>
  <!-- </div> -->
  <br><br>
  <div class="container-fluid py-3">
    <div class="card-deck ">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body rounded-3 p-3 bg-primary">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold text-white">Jumlah Mitra Terupdate</p>
                    <h5 class="font-weight-bolder text-white">
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
            <div class="card-body rounded-3 p-3 bg-primary">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold text-white">Jumlah Kegiatan Terbaru</p>
                    <h5 class="font-weight-bolder text-white">
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
      <br>
      <div class="row">
        <div class="col-sm-9">
          <div class="card">
            <div class="card bg-white">
              <div class="card-body" style="margin-left:18px">
                <h4 class="my-2 text-6x5 font-bold text-gray text-sm-left">VISI</h4>
                <p class="text-gray">"Penyedia Data Statistik Berkualitas untuk Indonesia Maju"<br class="text-white">(Provider of Qualified Statistical Data for Advanced Indonesia)</br></p>
                <h4 class="my-2 text-6x5 font-bold text-gray text-left">MISI</h4>
                <p class="text-gray">
                  1. Menyediakan statistik berkualitas yang berstandar nasional dan internasional<br>
                  2. Membina K/L/D/I melalui Sistem Statistik Nasional yang berkesinambungan<br>
                  3. Mewujudkan pelayanan prima di bidang statistik untuk terwujudnya Sistem Statistik Nasional<br>
                  4. Membangun SDM yang unggul dan adaptif berlandaskan nilai profesionalisme, integritas dan amanah
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col">
          <div class="col-sm-14 ">
            <div class="card">
              <div class="card bg-primary">
                <div class="card-header border-0">

                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <!-- button with a dropdown -->
                    
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</main>

@endsection