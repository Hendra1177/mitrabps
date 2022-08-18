@extends ('admin.layoutmitraadmin')
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
        <main class="container" style="padding-top:10px; align-left">
            @if (session('sukses'))
                <div class="alert alert-success fw-bold" role="alert">
                    {{session('sukses')}}
                </div>
            @endif

            <h3 class="text-center">Form Tambah Mitra</h3>
            <form action="/admin/mitra/formmitra/create" method="POST">
                {{csrf_field()}}

            <div class="form-group {{$errors->has('nama_mitra') ? ' has-error' : ''}}">
                <label for="pwd">Nama Mitra</label>
                <input name="nama_mitra" value="{{old('nama_mitra')}}" type="text" class="form-control" id="nama" placeholder="Enter nama mitra">
                @if ($errors->has('nama_mitra'))
                    <span class="help-block text-danger fs-9">*{{$errors->first('nama_mitra')}}</span>
                @endif
            </div>

            <div class="form-group {{$errors->has('pekerjaan') ? ' has-error' : ''}}">
                <label for="pwd">Pekerjaan</label>
                <input name="pekerjaan" value="{{old('pekerjaan')}}" type="text" class="form-control" id="tgl"
                    placeholder="Enter pekerjaan" name="pwd">
                    @if ($errors->has('pekerjaan'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('pekerjaan')}}</span>
                    @endif
            </div>

            <div class="form-group {{$errors->has('alamat') ? ' has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input name="alamat" value="{{old('alamat')}}" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter alamat">
                    @if ($errors->has('alamat'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('alamat')}}</span>
                    @endif
            </div>

            <div class="form-group {{$errors->has('desa') ? ' has-error' : ''}}">
                <label for="pwd">Desa</label>
                <input name="desa" value="{{old('desa')}}" type="text" class="form-control" id="trgt"
                    placeholder="Enter target" name="pwd">
                    @if ($errors->has('desa'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('desa')}}</span>
                    @endif
            </div>

            <div class="form-group {{$errors->has('kecamatan') ? ' has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                <input name="kecamatan" value="{{old('kecamatan')}}" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter kecamatan">
                    @if ($errors->has('kecamatan'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('kecamatan')}}</span>
                    @endif
            </div>

            <div class="form-group {{$errors->has('no_hp') ? ' has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                <input name="no_hp" value="{{old('no_hp')}}" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter nomor hp">
                    @if ($errors->has('no_hp'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('no_hp')}}</span>
                    @endif
            </div>

            <div class="form-group {{$errors->has('rekening_bri') ? ' has-error' : ''}}">
                <label for="exampleInputEmail1" class="form-label">Rekening BRI</label>
                <input name="rekening_bri" value="{{old('rekening_bri')}}" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter rekening BRI">
                    @if ($errors->has('rekening_bri'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('rekening_bri')}}</span>
                    @endif
            </div>
            <br>

            <button type="submit" class="btn btn-primary" >Submit</button>


        </main>
    </div>
</main>

@endsection