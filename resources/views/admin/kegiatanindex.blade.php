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

        <h2 class="text-center">Data Kegiatan</h1>
        <div class="row">
            <div class="col-6">
                <form class="example" action="/admin/kegiatan" method="GET">
                    <input class="5px" type="search" placeholder="Cari berdasarkan nama kegiatan.." name="cari">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-sm-6 btn-sm " type="button"data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Tambah Kegiatan</button>
                </div>
            </div>
            
            <table class="table table-hover table-bordered">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama Kegiatan</th>
                    <th>Bulan</th>
                    <th>Tanggal Pelaksana</th>
                    <th>Beban Anggaran</th>
                    <th>Volume Total</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Aksi</th>
                </tr>

                @foreach ($data_kegiatan as $kegiatan)
                <tr>
                    <td class="text-center">{{$kegiatan->id}}</td>
                    <td>{{$kegiatan->nama_kegiatan}}</td>
                    <td>{{$kegiatan->bulan}}</td>
                    <td class="text-center">{{$kegiatan->tanggal_pelaksana}}</td>
                    <td class="text-center">{{$kegiatan->beban_anggaran}}</td>
                    <td class="text-center">{{$kegiatan->volume_total}}</td>
                    <td class="text-center">{{$kegiatan->satuan}}</td>
                    <td class="text-center">{{$kegiatan->harga_satuan}}</td>
                    <td>
                        <a href="/admin/kegiatan/{{$kegiatan->id}}/edit" class= "btn btn-warning btn-sm">edit</a>
                        <a href="/admin/kegiatan/{{$kegiatan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin mau dihapus?')">delete</a>
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
                    <h5 class="modal-title text-center" id="exampleModalLabel">Data Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/kegiatan/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                            <input name="nama_kegiatan" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter nama kegiatan">
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
                                <option value="1Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pwd">Tanggal Pelaksanaan</label>
                            <input name="tanggal_pelaksana" type="date" class="form-control" id="tgl"
                                placeholder="Enter tanggal pelaksana" name="pwd">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Beban Anggaran</label>
                            <input name="beban_anggaran" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter beban anggaran">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Volume Total</label>
                            <input name="volume_total" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter volume total">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Satuan</label>
                            <input name="satuan" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter satuan">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Harga Satuan</label>
                            <input name="harga_satuan" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter harga satuan">
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