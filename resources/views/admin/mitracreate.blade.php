@extends ('admin.layoutmitraadmin')
@section('content')

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