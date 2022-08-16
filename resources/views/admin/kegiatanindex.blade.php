@extends('admin.layoutkegiatanadmin')
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
        <main class="container">
            @if (session('sukses'))
            <div class="alert alert-success fw-bold" role="alert">
                {{session('sukses')}}
            </div>
            @endif

            <h2 class="text-center" style="margin-top:20px" >Data Kegiatan</h1>
                <div class="row">
                    <div class="col-6">
                        <!-- <form class="example" action="/admin/kegiatan" method="GET">
                            <input class="px-5 rounded-2" type="search" placeholder="Cari berdasarkan nama kegiatan.." name="cari">
                            <button type="submit" class="bi bi-search rounded-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </form> -->
                    </div>
                    <div class="col-6">
                        <!-- Button trigger modal -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-sm btn-sm " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Tambah Kegiatan</button>
                        </div>
                    </div>
                    <div id="over">
                        <table class="table table-hover table-bordered " id="datatables">
                            <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Nama Kegiatan</th>
                                <th>Bulan</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Beban Anggaran</th>
                                <th>Volume Total</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($data_kegiatan as $kegiatan)
                            
                            <tr>
                            
                                <td class="text-center">{{$kegiatan->id}}</td>
                                <td>{{$kegiatan->nama_kegiatan}}</td>
                                <td>{{$kegiatan->bulan}}</td>
                                <td class="text-center">{{$kegiatan->tanggal_mulai}}</td>
                                <td class="text-center">{{$kegiatan->tanggal_akhir}}</td>
                                <td class="text-center">{{$kegiatan->beban_anggaran}}</td>
                                <td class="text-center">{{$kegiatan->volume_total}}</td>
                                <td class="text-center">{{$kegiatan->satuan}}</td>
                                <td class="text-center">{{$kegiatan->harga_satuan}}</td>
                                <td>
                                    <a href="/admin/kegiatan/{{$kegiatan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/admin/kegiatan/{{$kegiatan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin mau dihapus?')">Hapus</a>
                                    <!-- <form action="/admin/mitra/{{$kegiatan->id}}/edit" method="POST" class="d-inline">
                                        @csrf
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        Hapus
                                    </button>
                                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">


                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">PERINGATAN</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah yakin ingin dihapus?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                                                    <a href="/admin/kegiatan/{{$kegiatan->id}}/delete" class="btn btn-danger btn-sm">Hapus</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    </form> -->

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Data Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/kegiatan/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                            <input name="nama_kegiatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama kegiatan">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Bulan</label>
                            <select name="bulan" class="form-select" aria-label="Default select example">
                                {{-- <option selected></option> --}}
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pwd">Tanggal Mulai</label>
                            <input name="tanggal_mulai" type="date" class="form-control" id="tgl" placeholder="Enter tanggal pelaksana" name="pwd">
                        </div>

                        <div class="form-group">
                            <label for="pwd">Tanggal Akhir</label>
                            <input name="tanggal_akhir" type="date" class="form-control" id="tgl" placeholder="Enter tanggal pelaksana" name="pwd">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Beban Anggaran</label>
                            <input name="beban_anggaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter beban anggaran">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Volume Total</label>
                            <input name="volume_total" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter volume total">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Satuan</label>
                            <input name="satuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter satuan">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Harga Satuan</label>
                            <input name="harga_satuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter harga satuan">
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