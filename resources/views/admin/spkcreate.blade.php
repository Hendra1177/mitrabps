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
    <form action="/admin/spk/formspk/create" method="POST">
      {{csrf_field()}}
      <main class="container" style="padding-top:30px; align-left">
        @if (session('sukses'))
          <div class="alert alert-success fw-bold" role="alert">
            {{session('sukses')}}
          </div>
        @endif
        <h3 class="text-center">Form Surat Perjanjian Kerja</h3>
        <hr>
        
        <div class="form-group {{$errors->has('hari') ? ' has-error' : ''}}">
            <label for="exampleFormControlSelect1">Hari</label>
            <select name="hari" class="form-select" aria-label="Default select example">
              {{-- <option selected></option> --}}
              <option value="">-Pilih Hari-</option>
              <option value="Senin"{{(old('hari') == 'Senin') ? 'selected' : ''}}>Senin</option>
              <option value="Selasa"{{(old('hari') == 'Selasa') ? 'selected' : ''}}>Selasa</option>
              <option value="Rabu"{{(old('hari') == 'Rabu') ? 'selected' : ''}}>Rabu</option>
              <option value="Kamis"{{(old('hari') == 'Kamis') ? 'selected' : ''}}>Kamis</option>
              <option value="Jumat"{{(old('hari') == 'Jumat') ? 'selected' : ''}}>Jum'at</option>
              <option value="Sabtu"{{(old('hari') == 'Sabtu') ? 'selected' : ''}}>Sabtu</option>
              <option value="Minggu"{{(old('hari') == 'Minggu') ? 'selected' : ''}}>Minggu</option>
            </select>
              @if ($errors->has('hari'))
                  <span class="help-block text-danger">*{{$errors->first('hari')}}</span>
              @endif
        </div>

        <div class="form-group {{$errors->has('tanggal') ? ' has-error' : ''}}">
            <label for="text">Tanggal</label>
            <input name="tanggal" value="{{old('tanggal')}}" type="text" class="form-control" id="tanggal"
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
            <option value="Januari"{{(old('bulan') == 'Januari') ? 'selected' : ''}}>Januari</option>
            <option value="Februari"{{(old('bulan') == 'Februari') ? 'selected' : ''}}>Februari</option>
            <option value="Maret"{{(old('bulan') == 'Maret') ? 'selected' : ''}}>Maret</option>
            <option value="April"{{(old('bulan') == 'April') ? 'selected' : ''}}>April</option>
            <option value="Mei"{{(old('bulan') == 'Mei') ? 'selected' : ''}}>Mei</option>
            <option value="Juni"{{(old('bulan') == 'Juni') ? 'selected' : ''}}>Juni</option>
            <option value="Juli"{{(old('bulan') == 'Juli') ? 'selected' : ''}}>Juli</option>
            <option value="Agustus"{{(old('bulan') == 'Agustus') ? 'Septemberlected' : ''}}>Agustus</option>
            <option value="September"{{(old('bulan') == 'September') ? 'Oktoberelected' : ''}}>September</option>
            <option value="Oktober"{{(old('bulan') == 'Oktober') ? 'selected' : ''}}>Oktober</option>
            <option value="November"{{(old('bulan') == 'November') ? 'selected' : ''}}>November</option>
            <option value="Desember"{{(old('bulan') == 'Desember') ? 'selected' : ''}}>Desember</option>
          </select>
            @if ($errors->has('bulan'))
                <span class="help-block text-danger">*{{$errors->first('bulan')}}</span>
            @endif
        </div>

        <div class="form-group {{$errors->has('tahun') ? ' has-error' : ''}}">
            <label for="text">Tahun</label>
            <input name="tahun" value="{{old('tahun')}}" type="text" class="form-control" id="tahun"
              placeholder="Enter tahun">
              @if ($errors->has('tahun'))
                  <span class="help-block text-danger">*{{$errors->first('tahun')}}</span>
              @endif
        </div>

        <div class="form-group {{$errors->has('ppk') ? ' has-error' : ''}}">
          <label for="text">Pejabat Pembuat Komitmen</label>
          <input name="ppk" value="{{old('ppk')}}" type="text" class="form-control" id="ppk"
            placeholder="Enter nama PPK">
            @if ($errors->has('ppk'))
                <span class="help-block text-danger">*{{$errors->first('ppk')}}</span>
            @endif
        </div>

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
     
      {{-- (JANGAN DIHAPUS) --}}
        {{-- <div class="form-group {{$errors->has('kegiatan_id') ? ' has-error' : ''}}">
          <label for="exampleDataList" class="form-label">Pilih Kegiatan</label>
          <input class="form-control" onselect="getData" value="{{old('kegiatan_id')}}" list="datalistOptions" id="exampleDataList" placeholder="Enter kegiatan" name="kegiatan_id"  onchange="renderDataList()">
          <datalist id="datalistOptions">
              <option value="">
                  @foreach ($kegiatan as $km)
              <option data-id="{{$km->kegiatan_id}}">{{$km->nama_kegiatan}}</option>
              @endforeach
          </datalist>
          @if ($errors->has('kegiatan_id'))
              <span class="help-block text-danger fs-9">*The kegiatan field is required.</span>
          @endif
        </div> --}}

      {{-- (JANGAN DIHAPUS) --}}
        {{-- <div class="form-group {{$errors->has('mitrabaru_id') ? ' has-error' : ''}}">
          <label for="exampleDataList1" class="form-label">Pilih Mitra</label>
          <input class="form-control" value="{{old('mitrabaru_id')}}" list="datalistOptions1" id="exampleDataList1" placeholder="Enter mitra.." name="mitrabaru_id">
          <datalist id="datalistOptions1">
              <option value="">
                  @foreach ($mitra as $mt)
              <option value="{{$mt->id}}">{{$mt->nama_mitra}}</option>
              @endforeach
          </datalist>
          @if ($errors->has('mitra_id'))
              <span class="help-block text-danger fs-9">*The mitra field is required.</span>
          @endif
      </div> --}}

        <button type="submit" class="btn btn-primary" action>Submit</button>
      </main>
    </form>
  </div>

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
</main>





@endsection