@extends ('layouts.master')
@section('content')
<main class="main-content position-relative border-radius-lg ps">
  <div class="container-fluid py-4">
    <h1 class="my-6 text-6x5 font-bold text-white text-center">
      SELAMAT DATANG DI KEMITRAAN BPS JOMBANG
    </h1>
  </div>
    <br><br><br><br>
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
              <div class="card-body p-3 bg-primary">
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
      
      <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=500px">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="card px-3" style="width:500px">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{asset('template/assets/img/gb1.jpg')}}" alt="Los Angeles" style="width:500px">
      </div>

      <div class="item">
        <img src="{{asset('template/assets/img/gb2.jpg')}}" style="width:500px;">
      </div>
    
      <div class="item">
        <img src="{{asset('template/assets/img/gb3.jpg')}}" alt="New york" style="width:500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>

  </div>
</main>

@endsection