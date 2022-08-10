@extends ('Kemitraan.layoutkegiatan')
@section('content')
@section('Kegiatan', 'active')

<main class="main-content position-relative border-radius-lg ps">
  <div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
    <form action="/tambahkegiatan/create" method="POST">
      {{csrf_field()}}
      <main class="container" style="padding-top:10px; align-left">
        @if (session('sukses'))
          <div class="alert alert-success fw-bold" role="alert">
            {{session('sukses')}}
          </div>
        @endif
        <h4 class="text-center">Form Kegiatan</h4>
        <div class="form-group">
          <label for="exampleDataList" class="form-label">Nama Kegiatan</label>
          <input name="nama_kegiatan" class="typeahead form-control " type="text" id="nama_kegiatan"
            placeholder="Enter Nama Kegiatan">



          {{-- <datalist id="datalistOptions">
            <option value="San Francisco">
            <option value="New York">
            <option value="Seattle">
            <option value="Los Angeles">
            <option value="Chicago">
          </datalist> --}}
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Bulan</label>
          <select name="bulan" class="form-select" aria-label="Default select example">
            {{-- <option selected></option> --}}
            <option value="">-Pilih-</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
          </select>
        </div>

        <div class="form-group">
          <label for="pwd">Tanggal Mulai Pelaksana</label>
          <input name="tanggal_mulai" type="date" class="form-control" id="tgl" placeholder="Enter tanggal pelaksana">
        </div>

        <div class="form-group">
          <label for="pwd">Tanggal Akhir Pelaksana</label>
          <input name="tanggal_akhir" type="date" class="form-control" id="tgl" placeholder="Enter tanggal pelaksana">
        </div>

        <div class="form-group">
          <label for="text">Beban Anggaran</label>
          <input name="beban_anggaran" type="text" class="form-control" id="beban_anggaran"
            placeholder="Enter beban anggaran">
        </div>

        <div class="form-group">
          <label for="text">Volume Total</label>
          <input name="volume_total" type="text" class="form-control" id="volume_total"
            placeholder="Enter volume total">
        </div>

        <div class="form-group">
          <label for="text">Satuan</label>
          <input name="satuan" type="text" class="form-control" id="satuan" placeholder="Enter satuan">
        </div>

        <div class="form-group">
          <label for="text">Harga Satuan</label>
          <input name="harga_satuan" type="text" class="form-control" id="harga_satuan"
            placeholder="Enter harga satuan">
        </div>

        <button type="submit" class="btn btn-primary" actio>Submit</button>
      </main>
    </form>
  </div>
</main>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>



@endsection