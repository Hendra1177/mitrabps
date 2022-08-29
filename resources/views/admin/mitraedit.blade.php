@extends('admin.layoutmitraadmin')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

    <div class="card" style="margin-left:30px; margin-right:30px; margin-top:30px">
        <main class="container" style="padding-top:10px; align-left">
        @if (session('sukses'))
        <div class="alert alert-success fw-bold" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        
        <h2 class="text-center">Edit Data Mitra</h1>
        <div class="row">
            <div class="col-lg-12">

                <form action="/admin/mitra/{{$mitra->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nama Mitra</label>
                        <input name="nama_mitra" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter nama mitra" value="{{$mitra->nama_mitra}}">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Email</label>
                        <input name="email" type="text" class="form-control" id="tgl"
                            placeholder="Enter target" name="pwd" value="{{$mitra->email}}">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Kecamatan</label>
                        <input name="kecamatan" type="text" class="form-control" id="tgl"
                            placeholder="Enter target" name="pwd" value="{{$mitra->kecamatan_id}}">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Desa</label>
                        <input name="desa" type="text" class="form-control" id="tgl"
                            placeholder="Enter target" name="pwd" value="{{$mitra->desa_id}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter alamat" value="{{$mitra->alamat}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input name="kecamatan" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter kecamatan" value="{{$mitra->tanggal_lahir}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                        <input name="kecamatan" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter kecamatan" value="{{$mitra->jenis_kelamin_id}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                        <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter nomor hp" value="{{$mitra->no_hp}}">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control" id="tgl"
                            placeholder="Enter pekerjaan" name="pwd" value="{{$mitra->pekerjaan}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Rekening BRI</label>
                        <input name="rekening_bri" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter rekening BRI" value="{{$mitra->rekening_bri}}">
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
        </main>
    </div>
@endsection