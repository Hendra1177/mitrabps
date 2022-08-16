@extends ('admin.layoutkegiatanadmin')
@section('content')


<main class="main-content position-relative border-radius-lg ps">
  <div class="card" style="margin-left:30px; margin-right:30px; margin-top:30px">
    <form action="/admin/kegiatan/formkegiatan/create" method="POST">
      {{csrf_field()}}
      <main class="container" style="padding-top:10px; align-left">
        @if (session('sukses'))
          <div class="alert alert-success fw-bold" role="alert">
            {{session('sukses')}}
          </div>
        @endif
        <h3 class="text-center">Form Kegiatan</h3>
        
        <div class="form-group {{$errors->has('nama_kegiatan') ? ' has-error' : ''}}">
          <label for="validationServer04" class="form-label">Nama Kegiatan</label>
          <input name="nama_kegiatan" value="{{old('nama_kegiatan')}}" class="typeahead form-control " type="text" id="nama_kegiatan"
            placeholder="Enter Nama Kegiatan">
            @if ($errors->has('nama_kegiatan'))
                <span class="help-block text-danger fs-9">*{{$errors->first('nama_kegiatan')}}</span>
            @endif
        </div>

        <div class="form-group {{$errors->has('bulan') ? ' has-error' : ''}}">
          <label for="exampleFormControlSelect1">Bulan</label>
          <select name="bulan" class="form-select" aria-label="Default select example">
            {{-- <option selected></option> --}}
            <option value="">-Pilih-</option>
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

        <div class="form-group {{$errors->has('tanggal_mulai') ? ' has-error' : ''}}">
          <label for="pwd">Tanggal Mulai Pelaksana</label>
          <input name="tanggal_mulai" value="{{old('tanggal_mulai')}}" type="date" class="form-control" id="tgl" placeholder="Enter tanggal pelaksana">
          @if ($errors->has('tanggal_mulai'))
              <span class="help-block text-danger">*{{$errors->first('tanggal_mulai')}}</span>
          @endif
        </div>

        <div class="form-group {{$errors->has('tanggal_akhir') ? ' has-error' : ''}}">
          <label for="pwd">Tanggal Akhir Pelaksana</label>
          <input name="tanggal_akhir" value="{{old('tanggal_akhir')}}" type="date" class="form-control" id="tgl" placeholder="Enter tanggal pelaksana">
          @if ($errors->has('tanggal_akhir'))
              <span class="help-block text-danger">*{{$errors->first('tanggal_akhir')}}</span>
          @endif
        </div>

        <div class="form-group {{$errors->has('beban_anggaran') ? ' has-error' : ''}}">
          <label for="text">Beban Anggaran</label>
          <input name="beban_anggaran" value="{{old('beban_anggaran')}}" type="text" class="form-control" id="beban_anggaran"
            placeholder="Enter beban anggaran">
            @if ($errors->has('beban_anggaran'))
                <span class="help-block text-danger">*{{$errors->first('beban_anggaran')}}</span>
            @endif
          </div>

        <div class="form-group {{$errors->has('volume_total') ? ' has-error' : ''}}">
          <label for="text">Volume Total</label>
          <input name="volume_total" value="{{old('volume_total')}}" type="text" class="form-control" id="volume_total"
            placeholder="Enter volume total">
            @if ($errors->has('volume_total'))
                <span class="help-block text-danger">*{{$errors->first('volume_total')}}</span>
            @endif
        </div>

        <div class="form-group {{$errors->has('satuan') ? ' has-error' : ''}}">
          <label for="text">Satuan</label>
          <input name="satuan" value="{{old('satuan')}}" type="text" class="form-control" id="satuan" placeholder="Enter satuan">
          @if ($errors->has('satuan'))
                <span class="help-block text-danger">*{{$errors->first('satuan')}}</span>
          @endif
        </div>

        <div class="form-group {{$errors->has('harga_satuan') ? ' has-error' : ''}}">
          <label for="text">Harga Satuan</label>
          <input name="harga_satuan" value="{{old('harga_satuan')}}" type="text" class="form-control" id="harga_satuan"
            placeholder="Enter harga satuan">
            @if ($errors->has('harga_satuan'))
                <span class="help-block text-danger">*{{$errors->first('harga_satuan')}}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary" actio>Submit</button>
      </main>
    </form>
  </div>
</main>





@endsection