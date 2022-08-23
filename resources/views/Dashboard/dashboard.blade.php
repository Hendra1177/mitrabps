@extends ('layouts.master')
@section('content')
@section('Dashboard', 'active')

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<main class="main-content position-relative border-radius-lg ps">
  <!-- <div class="container-fluid py-4"> -->
  <h1 class="my-6 text-6x5 font-bold text-white text-center">
    SELAMAT DATANG DI BPS JOMBANG
  </h1>
  @can('isUser')


  <!-- </div> -->
  <br><br>
  <div class="container-fluid py-3">

    <div class="card">
      <div class="card bg-white">
        <div class="card-body">
          <h4 class="my-2 text-6x5 font-bold text-gray text-sm-center">VISI</h4>
          <p class="text-gray text-center">"Penyedia Data Statistik Berkualitas untuk Indonesia Maju"<br class="text-white">(Provider of Qualified Statistical Data for Advanced Indonesia)</br></p>
          <h4 class="my-2 text-6x5 font-bold text-gray text-center">MISI</h4>
          <p class="text-gray text-center">
            1. Menyediakan statistik berkualitas yang berstandar nasional dan internasional<br>
            2. Membina K/L/D/I melalui Sistem Statistik Nasional yang berkesinambungan<br>
            3. Mewujudkan pelayanan prima di bidang statistik untuk terwujudnya Sistem Statistik Nasional<br>
            4. Membangun SDM yang unggul dan adaptif berlandaskan nilai profesionalisme, integritas dan amanah
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</main>
@endcan

@endsection