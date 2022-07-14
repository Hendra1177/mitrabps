@extends ('layouts.master')
@section('content')
<main class="main-content position-relative border-radius-lg ps">
  <div class="container-fluid py-4">
    <h1 class="my-6 text-6x5 font-bold text-white text-center">
      SELAMAT DATANG DI KEMITRAAN BPS JOMBANG
    </h1>

    <div class="container-fluid py-3">
      <div class="card-deck ">
        <div class="row">
          <div class="col ">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Mitra Terupdate</p>
                      <h5 class="font-weight-bolder">
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
              <div class="card-body p-3 bg-primary>
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
      <br> <br>
      <div class="card" style="width:auto">
                    <img class="card-img-top" src="{{asset('template/assets/img/SP.jpg')}}" alt="Card image cap">
                      <div class="card-body">
                      </div>
                    </div>
    </div>
  </div>
</main>

@endsection