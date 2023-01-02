@extends('admin.layoutperjanjian')
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
            <div class="card-header pb-0 py-2">
                <div class="align-items-center">
                    <h2 class="text-center">Data Perjanjian</h3>
                </div>
            </div>
            <div class="card-body">
            @if(!empty($successMsg))
                    <div class="alert alert-success"> {{ $successMsg }}</div>
            @endif
            @if (session('sukses'))
        <div class="alert alert-success fw-bold" role="alert">
            {{session('sukses')}}
        </div>
        @endif
                <div class="row">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="/admin/perjanjian/formperjanjian" class="btn btn-primary bi bi-plus-lg" role="button"> Tambah Pelaksana</a>
                    </div>
                    <div id="over">
                        <table class="table table-hover table-bordered" id="datatables">
                            <thead>
                                <tr class="text-center">
                                <th scope="col">No</th>
                                <th>Nama Mitra</th>
                                    <th>Uraian Kegiatan</th>
                                    <th>Bulan</th>
                                    <th>Jangka Waktu</th>
                                    <th>Volume</th>
                                    <th>Satuan</th>
                                    <th>Harga Satuan</th>
                                    {{-- <th>Nilai Perjanjian</th> --}}
                                    <th>Beban Anggaran</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1;?>
                            @foreach ($kegiatanmitra as $kegiatan)
                                <tr>
                                <th scope="row">  {{$no}}</th>
                                <td>{{$kegiatan->nama_mitra}}</td>
                                    <td>{{$kegiatan->nama_kegiatan}}</td>
                                    <td>{{$kegiatan->bulan}}</td>
                                    <td class="text-center">{{$kegiatan->tanggal_mulai}} - {{$kegiatan->tanggal_akhir}}</td>
                                    <td class="text-center">{{$kegiatan->volume_total}}</td>
                                    <td class="text-center">{{$kegiatan->satuan}}</td>
                                    <td class="text-center">{{$kegiatan->harga_satuan}}</td>
                                    {{-- <td class="text-center">{{$kegiatan->nilai_perjanjian}}</td> --}}
                                    <td class="text-center">{{$kegiatan->beban_anggaran}}</td>
                                    <td>
                                       
                                        <a href="/admin/perjanjian/{{$kegiatan->id}}/edit" class="btn btn-warning btn-sm bi bi-pencil-square" title="Edit"></a>
                                        <a href="/admin/perjanjian/{{$kegiatan->id}}/delete" class="btn btn-danger btn-sm bi bi-trash3-fill" title="Hapus" onclick="return confirm('Apakah yakin mau dihapus?')"></a>     
                                    </td>
                                </tr>
                                <?php $no++ ;?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal 
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
                            <label for="pwd">Tanggal Pelaksanaan</label>
                            <input name="tanggal_pelaksana" type="date" class="form-control" id="tgl" placeholder="Enter tanggal pelaksana" name="pwd">
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
            </div>-->
            
</main>
@endsection