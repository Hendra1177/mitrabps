@extends ('layouts.layoutmitra')
@section('content')

<main class="main-content position-relative border-radius-lg ps">
    <div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
        <main class="container" style="padding-top:10px; align-left">
            @if (session('sukses'))
                <div class="alert alert-success fw-bold" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <h4 class="text-center">Form Tambah Mitra</h4>
            <form action="/tambahmitra/create" method="POST">
                {{csrf_field()}}
            <div class="form-group">
                <script>
                    $(function() {
                        $("#nama").autocomplete({
                            source: 'autocomplete.php'
                        });
                    });
                </script>
                <label for="pwd">Nama Mitra</label>
                <input name="nama_mitra" type="text" class="form-control" id="nama" placeholder="Enter nama mitra">
            </div>

            <div class="form-group">
                <label for="pwd">Target</label>
                <input name="target" type="text" class="form-control" id="trgt"
                    placeholder="Enter target" name="pwd">
            </div>

            <div class="form-group">
                <label for="pwd">Pekerjaan</label>
                <input name="pekerjaan" type="text" class="form-control" id="tgl"
                    placeholder="Enter pekerjaan" name="pwd">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter alamat">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                <input name="kecamatan" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter kecamatan">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter nomor hp">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Rekening BRI</label>
                <input name="rekening_bri" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter rekening BRI">
            </div>
            <br>

            <button type="submit" class="btn btn-primary" >Submit</button>


        </main>
    </div>
</main>

@endsection