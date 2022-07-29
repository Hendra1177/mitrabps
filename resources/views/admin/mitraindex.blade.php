@extends('admin.layoutadmin')
@section('content')

<main class="main-content position-relative border-radius-lg ps">
    <div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
        <main class="container">
        @if (session('sukses'))
        <div class="alert alert-success fw-bold" role="alert">
            {{session('sukses')}}
        </div>
        @endif

        <h2 class="text-center">Data Mitra</h1>
        <div class="row">
            <div class="col-6">
                <form class="example" action="/admin/mitra" method="GET">
                    <input class="px-5" type="search" placeholder="Cari berdasarkan nama mitra.." name="cari">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-sm-6 btn-sm " type="button"data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Tambah Mitra</button>
                </div>
            </div>
            
            <table class="table table-hover table-bordered">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama Mitra</th>
                    <th>Target</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Kecamatan</th>
                    <th>Nomor HP</th>
                    <th>Rekening BRI</th>
                    <th>Aksi</th>
                </tr>

                @foreach ($data_mitra as $mitra)
                <tr>
                    <td class="text-center">{{$mitra->id}}</td>
                    <td>{{$mitra->nama_mitra}}</td>
                    <td class="text-center">{{$mitra->target}}</td>
                    <td class="text-center">{{$mitra->pekerjaan}}</td>
                    <td>{{$mitra->alamat}}</td>
                    <td class="text-center">{{$mitra->kecamatan}}</td>
                    <td class="text-center">{{$mitra->no_hp}}</td>
                    <td class="text-center">{{$mitra->rekening_bri}}</td>
                    <td>
                        <a href="/admin/mitra/{{$mitra->id}}/edit" class= "btn btn-warning btn-sm">edit</a>
                        <a href="/admin/mitra/{{$mitra->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin mau dihapus?')">delete</a>
                        {{-- <a href="/kegiatan/{{$kegiatan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin mau dihapus?')">delete</a> --}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Data Mitra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/mitra/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nama Mitra</label>
                            <input name="nama_mitra" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter nama mitra">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</main>
@endsection