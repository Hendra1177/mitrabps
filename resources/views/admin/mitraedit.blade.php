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
                    @method('PUT')
                    <div class="form-group {{$errors->has('nama_mitra') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Nama Mitra</label>
                        <input name="nama_mitra" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter nama mitra" value="{{$mitra->nama_mitra}}">
                        @if ($errors->has('nama_mitra'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('nama_mitra')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('email') ? ' has-error' : ''}}">
                        <label for="pwd">Email</label>
                        <input name="email" type="text" class="form-control" id="tgl"
                            placeholder="Enter target" name="pwd" value="{{$mitra->email}}">
                        @if ($errors->has('email'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('email')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('kecamatan_id') ? ' has-error' : ''}}">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-select " name="kecamatan_id" id="kecamatan_id" onselect="getData" value="{{old('kecamatan_id')}}">
                            <option selected>Pilih Kecamatan</option>
                            @foreach ($kecamatan as $kec)
                                <option value="{{$kec->id}}">{{$kec->nama_kecamatan}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('kecamatan_id'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('kecamatan_id')}}</span>
                        @endif
                    </div>
    
                    <div class="form-group {{$errors->has('desa_id') ? ' has-error' : ''}}">
                        <label for="desa">Desa</label>
                        <select class="form-select" name="desa_id" id="desa_id" value="{{$mitra->desa_id}}">
                            <option>Pilih Desa</option>
                            {{-- @foreach ($desa as $ds)
                                <option value="{{$ds->id}}">{{$ds->nama_desa}}</option>
                            @endforeach --}}
                        </select>
                        @if ($errors->has('desa_id'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('desa_id')}}</span>
                        @endif
                    </div>
                     
                    <div class="form-group {{$errors->has('alamat') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter alamat" value="{{$mitra->alamat}}">
                        @if ($errors->has('alamat'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('alamat')}}</span>
                        @endif
                    </div>
                    
                    <div class="form-group {{$errors->has('tanggal_lahir') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter kecamatan" value="{{$mitra->tanggal_lahir}}">
                        @if ($errors->has('tanggal_lahir'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('tanggal_lahir')}}</span>
                        @endif
                    </div>
                    
                    <div class="form-group {{$errors->has('jeniskelamin_id') ? ' has-error' : ''}}">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jeniskelamin_id" value="{{$mitra->jenis_kelamin}} "class="form-select" aria-label="Default select example">
                            <option value="">-Pilih Jenis Kelamin-</option>
                            <option value="{{$mitra->jeniskelamin->id}}">{{$mitra->jeniskelamin->kelamin}}</option>
                            @foreach ($jeniskelamin as $item)
                                <option value="{{$item->id}}">{{$item->kelamin}}</option>
                            @endforeach
                        </select>
                          @if ($errors->has('jeniskelamin_id'))
                              <span class="help-block text-danger">*{{$errors->first('jeniskelamin_id')}}</span>
                          @endif
                      </div>

                    <div class="form-group {{$errors->has('no_hp') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                        <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter nomor hp" value="{{$mitra->no_hp}}">
                        @if ($errors->has('no_hp'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('no_hp')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('pekerjaan') ? ' has-error' : ''}}">
                        <label for="pwd">Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control" id="tgl"
                            placeholder="Enter pekerjaan" name="pwd" value="{{$mitra->pekerjaan}}">
                        @if ($errors->has('pekerjaan'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('pekerjaan')}}</span>
                        @endif
                    </div>

                    <div class="form-group {{$errors->has('rekening_bri') ? ' has-error' : ''}}">
                        <label for="exampleInputEmail1" class="form-label">Rekening BRI</label>
                        <input name="rekening_bri" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter rekening BRI" value="{{$mitra->rekening_bri}}">
                        @if ($errors->has('rekening_bri'))
                            <span class="help-block text-danger fs-9">*{{$errors->first('rekening_bri')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
        <script>
            const render = document.querySelector('#desa_id')
            const a = document.querySelector('#kecamatan_id');
                a.addEventListener('change', function() {
                const res = fetch(`/getDataDesa/${this.value}`).then((response) => response.json())
                .then((data) => {
                    let rendered = data.map((data)=>{
                        return ` <option value=${data.id}>${data.nama_desa}</option>`
                    })
                    rendered = `<option>Pilih Desa</option>${rendered}`
                    return render.innerHTML= rendered;
                });
                }, false);
          
        </script>
        </main>
    </div>
@endsection