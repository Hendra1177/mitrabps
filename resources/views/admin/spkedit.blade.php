@extends ('admin.layoutspk')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        #over {
          /* background-color: #eee; */
          width: auto;
          height: auto;
          /* border: 900px ; */
          overflow-y: hidden;
            overflow-x: scroll;
        }
    </style>
</head>

<main class="main-content position-relative border-radius-lg ps">
  <div class="card" style="margin-left:30px; margin-right:30px; margin-top:30px">
    <form action="/admin/spk/{{$spk->id}}/update" method="POST">
      {{csrf_field()}}
      <main class="container" style="padding-top:30px; align-left">
        @if (session('sukses'))
          <div class="alert alert-success fw-bold" role="alert">
            {{session('sukses')}}
          </div>
        @endif
        <h3 class="text-center">Edit Surat Perjanjian Kerja</h3>
        <hr>
        
        <div class="form-group {{$errors->has('hari') ? ' has-error' : ''}}">
            <label for="exampleFormControlSelect1">Hari</label>
            <select name="hari" class="form-select" aria-label="Default select example">
              {{-- <option selected></option> --}}
              <option value="">-Pilih Hari-</option>
              <option value="Senin"@if($spk->hari == 'Senin') selected @endif>Senin</option>
              <option value="Selasa"@if($spk->hari == 'Selasa') selected @endif>Selasa</option>
              <option value="Rabu"@if($spk->hari == 'Rabu') selected @endif>Rabu</option>
              <option value="Kamis"@if($spk->hari == 'Kamis') selected @endif>Kamis</option>
              <option value="Jumat"@if($spk->hari == 'Jumat') selected @endif>Jum'at</option>
              <option value="Sabtu"@if($spk->hari == 'Sabtu') selected @endif>Sabtu</option>
              <option value="Minggu"@if($spk->hari == 'Minggu') selected @endif>Minggu</option>
            </select>
              @if ($errors->has('hari'))
                  <span class="help-block text-danger">*{{$errors->first('hari')}}</span>
              @endif
        </div>

        <div class="form-group {{$errors->has('tanggal') ? ' has-error' : ''}}">
            <label for="text">Tanggal</label>
            <input name="tanggal" value="{{$spk->tanggal}}" type="text" class="form-control" id="tanggal"
              placeholder="Enter tanggal">
              @if ($errors->has('tanggal'))
                  <span class="help-block text-danger">*{{$errors->first('tanggal')}}</span>
              @endif
        </div>

        <div class="form-group {{$errors->has('bulan') ? ' has-error' : ''}}">
          <label for="exampleFormControlSelect2">Bulan</label>
          <select name="bulan" class="form-select" aria-label="Default select example">
            {{-- <option selected></option> --}}
            <option value="">-Pilih Bulan-</option>
            <option value="Januari"@if($spk->bulan == 'Januari') selected @endif>Januari</option>
            <option value="Februari"@if($spk->bulan == 'Februari') selected @endif>Februari</option>
            <option value="Maret"@if($spk->bulan == 'Maret') selected @endif>Maret</option>
            <option value="April"@if($spk->bulan == 'April') selected @endif>April</option>
            <option value="Mei"@if($spk->bulan == 'Mei') selected @endif>Mei</option>
            <option value="Juni"@if($spk->bulan == 'Juni') selected @endif>Juni</option>
            <option value="Juli"@if($spk->bulan == 'Juli') selected @endif>Juli</option>
            <option value="Agustus"@if($spk->bulan == 'Agustus') selected @endif>Agustus</option>
            <option value="September"@if($spk->bulan == 'September') selected @endif>September</option>
            <option value="Oktober"@if($spk->bulan == 'Oktober') selected @endif>Oktober</option>
            <option value="November"@if($spk->bulan == 'November') selected @endif>November</option>
            <option value="Desember"@if($spk->bulan == 'Desember') selected @endif>Desember</option>
          </select>
            @if ($errors->has('bulan'))
                <span class="help-block text-danger">*{{$errors->first('bulan')}}</span>
            @endif
        </div>

        <div class="form-group {{$errors->has('tahun') ? ' has-error' : ''}}">
            <label for="text">Tahun</label>
            <input name="tahun" value="{{$spk->tahun}}" type="text" class="form-control" id="tahun"
              placeholder="Enter tahun">
              @if ($errors->has('tahun'))
                  <span class="help-block text-danger">*{{$errors->first('tahun')}}</span>
              @endif
        </div>

        <div class="form-group {{$errors->has('ppk') ? ' has-error' : ''}}">
          <label for="text">Pejabat Pembuat Komitmen</label>
          <input name="ppk" value="{{$spk->ppk}}" type="text" class="form-control" id="ppk"
            placeholder="Enter nama PPK">
            @if ($errors->has('ppk'))
                <span class="help-block text-danger">*{{$errors->first('ppk')}}</span>
            @endif
        </div>

        {{-- <div class="form-group {{$errors->has('kegiatan_id') ? ' has-error' : ''}}">
          <label for="exampleDataList" class="form-label">Pilih Kegiatan</label>
          @foreach ($data_kegiatan as $dk)
          <input class="form-control" value="{{$dk->nama_kegiatan}}" list="datalistOptions" id="exampleDataList" placeholder="Enter kegiatan" name="kegiatan_id">
          @endforeach
          <datalist id="datalistOptions">
              <option value="">
                  @foreach ($kegiatan as $km)
              <option value="{{$km->kegiatan_id}}">{{$km->kegiatan_id}}</option>
              @endforeach
          </datalist>
          @if ($errors->has('kegiatan_id'))
              <span class="help-block text-danger fs-9">*The kegiatan field is required.</span>
          @endif
        </div>

        <div class="form-group {{$errors->has('mitrabaru_id') ? ' has-error' : ''}}">
          <label for="exampleDataList1" class="form-label">Pilih Mitra</label>
          @foreach ($data_kegiatan as $dk)yy
          <input class="form-control" value="{{$dk->nama_mitra}}" list="datalistOptions1" id="exampleDataList1" placeholder="Enter mitra.." name="mitrabaru_id">
          @endforeach
          <datalist id="datalistOptions1">
              <option value="">
                  @foreach ($mitra as $mt)
              <option value="{{$mt->mitrabaru_id}}">{{$mt->mitrabaru_id}}</option>
              @endforeach
          </datalist>
          @if ($errors->has('mitrabaru_id'))
              <span class="help-block text-danger fs-9">*The mitra field is required.</span>
          @endif
      </div> --}}

      <div class="mb-3" {{$errors->has('kegiatan_id') ? ' has-error' : ''}}>
        <label for="disabledSelect" class="form-label">Kegiatan</label>
        <select id="disabledSelect1" class="form-select" value="{{old('kegiatan_id')}}" list="datalistOptions" name="kegiatan_id"  >
          <option value="">-Pilih Kegiatan-</option>
            @foreach ($kegiatan as $km)
        <option value="{{$km->kegiatan_id}}">{{$km->nama_kegiatan}}</option>
        @endforeach
        </select>
        @if ($errors->has('kegiatan_id'))
            <span class="help-block text-danger fs-9">*The kegiatan field is required.</span>
        @endif
      </div>
  
      <div class="mb-3" {{$errors->has('mitrabaru_id') ? ' has-error' : ''}}>
        <label for="disabledSelect" class="form-label">Pilih Mitra</label>
        <select id="disabledSelect" class="form-select" value="{{old('mitrabaru_id')}}" list="datalistOptions1" id="exampleDataList1" placeholder="Enter mitra.." name="mitrabaru_id"">
          <option value="">-Pilih Mitra-</option>
            {{-- @foreach ($mitra as $mt)
            <option value="{{$mt->id}}">{{$mt->nama_mitra}}</option>
            @endforeach --}}
        </select>
        @if ($errors->has('mitra_id'))
            <span class="help-block text-danger fs-9">*The mitra field is required.</span>
        @endif
      </div>
        <button type="submit" class="btn btn-warning" action>Update</button>
      </main>
    </form>
  </div>
</main>

<script>
  const render = document.querySelector('#disabledSelect')
  
  const a = document.querySelector('#disabledSelect1');
      a.addEventListener('change', function() {
        console.log(a.value);
      const res = fetch(`/getDataKegiatan/${this.value}`).then((response) =>response.json())
      .then((data) => {
        console.log(render);
          let rendered = data.map((data)=>{
              return ` <option value=${data.mitrabaru_id}>${data.nama_mitra}</option>`
          })
          rendered = `<option>-Pilih Mitra-</option>${rendered}`
          return render.innerHTML= rendered;
      }).catch((e)=>{
        console.log(e);
      })
      })
</script>



@endsection