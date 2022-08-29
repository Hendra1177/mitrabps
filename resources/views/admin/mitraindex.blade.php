@extends('admin.layoutmitraadmin')
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
        @if (session('sukses'))
            <div class="alert alert-success fw-bold" role="alert">
                {{session('sukses')}}
            </div>
        @endif
            <div class="card" style="margin-left:30px; margin-right:30px; margin-top:30px">
                <div class="card-header pb-0 py-2">
                    <div class="align-items-center">
                        <h2 class="text-center">Data Mitra</h3>
                    </div>
                </div>

                <div class="card-body">
                <div class="row">
                    <div class="col-6">
                       
                    </div>
                    <div class="col-6">
                        <!-- Button trigger modal -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/admin/mitra/formmitra" class="btn btn-primary" role="button">Tambah Mitra</a>
                        </div>
                    </div>
                    <div id="over">
                        <table class="table table-hover table-bordered" id="datatable">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Nama Mitra</th>
                                    <th>Email</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor HP</th>
                                    <th>Pekerjaan</th>
                                    <th>Rekening BRI</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data_mitra as $mitra)
                                <tr>
                                    <td>{{$mitra->id}}</td>
                                    <td>{{$mitra->nama_mitra}}</td>
                                    <td>{{$mitra->email}}</td>
                                    <td>{{$mitra->kecamatan_id}}</td>
                                    <td>{{$mitra->desa_id}}</td>
                                    <td>{{$mitra->alamat}}</td>
                                    <td>{{$mitra->tanggal_lahir}}</td>
                                    <td>{{$mitra->jenis_kelamin_id}}</td>
                                    <td>{{$mitra->no_hp}}</td>
                                    <td>{{$mitra->pekerjaan}}</td>
                                    <td>{{$mitra->rekening_bri}}</td>
                                    <td>
                                        <a href="/admin/mitra/{{$mitra->id}}/detail" class="btn btn-info btn-sm">View</a>
                                        <a href="/admin/mitra/{{$mitra->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/admin/mitra/{{$mitra->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin mau dihapus?')">Hapus</a>
                                        <!-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDelete">
                                            Delete
                                        </button>
                                        <div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="exampleModalLabelDelete" aria-hidden="true">
                                            <form action="/admin/mitra/create" method="POST">
                                                {{-- {{csrf_field()}} --}}

                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabelDelete">PERINGATAN</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah yakin ingin dihapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                                                            {{-- <a href="/admin/mitra/{{$mitra->id}}/delete" class="btn btn-danger btn-sm">Hapus</a> --}}
                                                        </div>
                                                    </div>
                                                </div>

                                            </form> -->

                                        {{-- </div> --}}
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>  

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input name="nama_mitra" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama mitra">
                        </div>

                        <div class="form-group">
                            <label for="pwd">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" id="tgl" placeholder="Enter pekerjaan" name="pwd">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter alamat">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Desa</label>
                            <input name="desa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter alamat">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                            <input name="kecamatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter kecamatan">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                            <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nomor hp">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Rekening BRI</label>
                            <input name="rekening_bri" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter rekening BRI">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</main>

@endsection