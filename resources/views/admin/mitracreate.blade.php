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

            <h3 class="text-center" style="padding-top:20px">Form Tambah Mitra</h3>
            <hr>
            <form action="{{route('mitraAdmin.create')}}" method="POST">
                {{csrf_field()}}

                <div class="form-group {{$errors->has('nama_mitra') ? ' has-error' : ''}}">
                    <label for="pwd">Nama Mitra</label>
                    <input name="nama_mitra" value="{{old('nama_mitra')}}" type="text" class="form-control" id="nama" placeholder="Enter nama mitra">
                    @if ($errors->has('nama_mitra'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('nama_mitra')}}</span>
                    @endif
                </div>

                <div class="form-group {{$errors->has('email') ? ' has-error' : ''}}">
                    <label for="pwd">Email</label>
                    <input name="email" value="{{old('email')}}" type="text" class="form-control" id="nama" placeholder="Enter email">
                    @if ($errors->has('email'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('email')}}</span>
                    @endif
                </div>

                {{-- <div class="form-group {{$errors->has('kecamatan_id') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                    <input name="kecamatan_id" value="{{old('kecamatan_id')}}" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter kecamatan">
                        @if ($errors->has('kecamatan_id'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('kecamatan_id')}}</span>
                        @endif
                </div> --}}

                <div class="form-group {{$errors->has('kecamatan_id') ? ' has-error' : ''}}">
                    <label for="exampleDataList" class="form-label">Pilih Kecamatan</label>
                    <input class="form-control" value="{{old('kecamatan_id')}}" list="datalistOptions" id="exampleDataList" placeholder="Enter kecamatan" name="kecamatan_id">
                    <datalist id="datalistOptions">
                        <option value="">
                            @foreach ($kecamatan as $kc)
                        <option value="{{$kc->nama_kecamatan}}">{{$kc->nama_kecamatan}}</option>
                        @endforeach
                    </datalist>
                    @if ($errors->has('kecamatan_id'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('kecamatan_id')}}</span>
                    @endif
                </div>

                <div class="form-group {{$errors->has('desa_id') ? ' has-error' : ''}}">
                    <label for="exampleDataList" class="form-label">Pilih Desa</label>
                    <input class="form-control" value="{{old('desa_id')}}" list="datalistOptions1" id="exampleDataList" placeholder="Enter desa" name="desa_id">
                    <datalist id="datalistOptions1">
                        <option value="">
                            @foreach ($desa as $ds)
                        <option value="{{$ds->nama_desa}}">{{$ds->nama_desa}}</option>
                        @endforeach
                    </datalist>
                    @if ($errors->has('desa_id'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('desa_id')}}</span>
                    @endif
                </div>

                {{-- <div class="form-group {{$errors->has('desa_id') ? ' has-error' : ''}}">
                    <label for="pwd">Desa</label>
                    <input name="desa_id" value="{{old('desa_id')}}" type="text" class="form-control" id="trgt"
                        placeholder="Enter target" name="pwd">
                        @if ($errors->has('desa_id'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('desa_id')}}</span>
                        @endif
                </div> --}}

                <div class="form-group {{$errors->has('alamat') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input name="alamat" value="{{old('alamat')}}" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter alamat">
                        @if ($errors->has('alamat'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('alamat')}}</span>
                        @endif
                </div>

                <div class="form-group {{$errors->has('tanggal_lahir') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input name="tanggal_lahir" value="{{old('alamat')}}" type="date" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter tanggal lahir">
                        @if ($errors->has('tanggal_lahir'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('tanggal_lahir')}}</span>
                        @endif
                </div>

                {{-- <div class="form-group {{$errors->has('jenis_kelamin_id') ? ' has-error' : ''}}">
                    <label for="exampleInputEmail1" class="form-label">Jenis_Kelamin</label>
                    <input name="jenis_kelamin_id" value="{{old('alamat')}}" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter jenis kelamin">
                        @if ($errors->has('jenis_kelamin_id'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('jenis_kelamin_id')}}</span>
                        @endif
                </div> --}}

                {{-- <div class="form-group {{$errors->has('jenis_kelamin_id') ? ' has-error' : ''}}">
                    <label for="exampleDataList" class="form-label">Pilih Jenis Kelamin</label>
                    <input class="form-control" value="{{old('jenis_kelamin_id')}}" list="datalistOptions2" id="exampleDataList2" placeholder="Enter jenis kelamin" name="jenis_kelamin_id">
                    <datalist id="datalistOptions2">
                        <option value="">
                            @foreach ($jenis_kelamin as $jk)
                        <option value="{{$jk->kelamin}}">{{$jk->kelamin}}</option>
                        @endforeach
                    </datalist>
                    @if ($errors->has('jenis_kelamin_id'))
                        <span class="help-block text-danger fs-9">*{{$errors->first('jenis_kelamin_id')}}</span>
                    @endif
                </div> --}}

                <div class="form-group {{$errors->has('jenis_kelamin_id') ? ' has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin_id" class="form-select" aria-label="Default select example">
                      
                      <option value="">-Pilih-</option>
                      @foreach ($jenis_kelamin as $jk)
                        <option value="{{$jk->kelamin}}">{{$jk->kelamin}}</option>
                        @endforeach
                    </select>
                      @if ($errors->has('jenis_kelamin_id'))
                          <span class="help-block text-danger">*{{$errors->first('jenis_kelamin_id')}}</span>
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

                <div class="form-group {{$errors->has('pekerjaan') ? ' has-error' : ''}}">
                    <label for="pwd">Pekerjaan</label>
                    <input name="pekerjaan" value="{{old('pekerjaan')}}" type="text" class="form-control" id="tgl"
                        placeholder="Enter pekerjaan" name="pwd">
                        @if ($errors->has('pekerjaan'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('pekerjaan')}}</span>
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