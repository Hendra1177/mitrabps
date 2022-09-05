@extends ('Kemitraan.layoutkegiatan')
@section('content')
@section('Kegiatan', 'active')
    
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
    <main class="container" style="padding-top:10px; align-left">
        @if (session('sukses'))
        <div class="alert alert-success fw-bold" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        
        <h2 class="text-center">Edit Data Kegiatan</h1>
        <div class="row">
            <div class="col-lg-12">
                <form action="/kegiatan/{{$kegiatan->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group {{$errors->has('nama_kegiatan') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                        <input name="nama_kegiatan"  type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter nama kegiatan" value="{{$kegiatan->nama_kegiatan}}">
                        @if ($errors->has('nama_kegiatan'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('nama_kegiatan')}}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Bulan</label>
                        <select name="bulan" class="form-select" aria-label="Default select example">
                            {{-- <option selected></option> --}}
                            <option value="Januari"@if($kegiatan->bulan == 'Januari') selected @endif>Januari</option>
                            <option value="Februari"@if($kegiatan->bulan == 'Februari') selected @endif>Februari</option>
                            <option value="Maret"@if($kegiatan->bulan == 'Maret') selected @endif>Maret</option>
                            <option value="April"@if($kegiatan->bulan == 'April') selected @endif>April</option>
                            <option value="Mei"@if($kegiatan->bulan == 'Mei') selected @endif>Mei</option>
                            <option value="Juni"@if($kegiatan->bulan == 'Juni') selected @endif>Juni</option>
                            <option value="Juli"@if($kegiatan->bulan == 'Juli') selected @endif>Juli</option>
                            <option value="Agustus"@if($kegiatan->bulan == 'Agustus') selected @endif>Agustus</option>
                            <option value="September"@if($kegiatan->bulan == 'September') selected @endif>September</option>
                            <option value="Oktober"@if($kegiatan->bulan == 'Oktober') selected @endif>Oktober</option>
                            <option value="November"@if($kegiatan->bulan == 'November') selected @endif>November</option>
                            <option value="Desember"@if($kegiatan->bulan == 'Desember') selected @endif>Desember</option>
                        </select>
                    </div>

                    <div class="form-group {{$errors->has('tanggal_mulai') ? ' has-error' : ''}}">
                        <label for="pwd">Tanggal Mulai Pelaksanaan</label>
                        <input name="tanggal_mulai" type="date" class="form-control" id="tgl"
                            placeholder="Enter tanggal mulai pelaksana" name="pwd" value="{{$kegiatan->tanggal_mulai}}">
                        @if ($errors->has('tanggal_mulai'))
                            <span class="help-block text-danger">*{{$errors->first('tanggal_mulai')}}</span>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('tanggal_akhir') ? ' has-error' : ''}}">
                        <label for="pwd">Tanggal Akhir Pelaksanaan</label>
                        <input name="tanggal_akhir" type="date" class="form-control" id="tgl"
                            placeholder="Enter tanggal akhir pelaksana" name="pwd" value="{{$kegiatan->tanggal_akhir}}">
                        @if ($errors->has('tanggal_akhir'))
                            <span class="help-block text-danger">*{{$errors->first('tanggal_akhir')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('beban_anggaran') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Beban Anggaran</label>
                        <input name="beban_anggaran" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter beban anggaran" value="{{$kegiatan->beban_anggaran}}">
                        @if ($errors->has('beban_anggaran'))
                            <span class="help-block text-danger">*{{$errors->first('beban_anggaran')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('volume_total') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Volume Total</label>
                        <input name="volume_total" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter volume total" value="{{$kegiatan->volume_total}}">
                        @if ($errors->has('volume_total'))
                            <span class="help-block text-danger">*{{$errors->first('volume_total')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('satuan') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Satuan</label>
                        <input name="satuan" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter satuan" value="{{$kegiatan->satuan}}">
                        @if ($errors->has('satuan'))
                            <span class="help-block text-danger">*{{$errors->first('satuan')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('harga_satuan') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Harga Satuan</label>
                        <input name="harga_satuan" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter harga satuan" value="{{$kegiatan->harga_satuan}}">
                        @if ($errors->has('harga_satuan'))
                            <span class="help-block text-danger">*{{$errors->first('harga_satuan')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection