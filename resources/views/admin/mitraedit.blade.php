@extends('admin.layoutadmin')
@section('content')

    <div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
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
                        <label for="pwd">Target</label>
                        <input name="target" type="text" class="form-control" id="tgl"
                            placeholder="Enter target" name="pwd" value="{{$mitra->target}}">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control" id="tgl"
                            placeholder="Enter pekerjaan" name="pwd" value="{{$mitra->pekerjaan}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter alamat" value="{{$mitra->alamat}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                        <input name="kecamatan" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter kecamatan" value="{{$mitra->kecamatan}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                        <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter nomor hp" value="{{$mitra->no_hp}}">
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