@extends ('Kemitraan.layoutmitra')
@section('content')

<head>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

<main class="main-content position-relative border-radius-lg ps">
    <div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
        <form action="/tambahkegiatanmitra/create" method="POST">

        <main class="container" style="padding-top:10px; align-left">
            <center>
                <h4>Form Mitra</h4>
            </center>
            <div class="form-group">
                <script>
                    $(function() {
                        $("#nama_kegiatan").autocomplete({
                            source: 'autocomplete.php'
                        });
                    });
                </script>
                <label for="pwd">Pilih Kegiatan</label>
                <input type="form" class="form-control" id="kegiatan_id" placeholder="Enter nama kegiatan" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Nama Mitra</label>
                <input type="form" class="form-control" id="mitra_id" placeholder="Enter nama mitra" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Target</label>
                <input type="form" class="form-control" id="nilai_perjanjian" placeholder="Enter target" name="pwd">
            </div>
            {{-- <div class="form-group">
                <label for="pwd">Bertugas Sebagai</label>
                <input type="form" class="form-control" id="tugas" placeholder="Enter bertugas sebagai" name="pwd">
            </div> --}}
            <br>
            <a class="btn btn-warning" href="/tambahmitra" role="button">Tambah Mitra</a>

            <button type="submit" class="btn btn-primary">Submit</button>


        </main>
    </div>
</main>

@endsection