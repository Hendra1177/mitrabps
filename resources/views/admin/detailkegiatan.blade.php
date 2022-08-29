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
    
        
            @if (session('sukses'))
            <div class="alert alert-success fw-bold" role="alert">
                {{session('sukses')}}
            </div>
            @endif
   <div class="card" style="margin-left:30px; margin-right:30px; margin-top:30px">
    
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class=" text-center">Detail Kegiatan</p>
            </div>
        </div>
        <div class="card-body ">

            <dl class="row">
                <dl class="row">
                    <dt class="col-sm-3">Nama Kegiatan : </dt>
                    <input class="col-sm-4 form-control" type="text" value="{{$kegiatan->nama_kegiatan}}" aria-label="Disabled input example" disabled readonly>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Bulan : </dt>
                    <input class="col-sm-4 form-control" type="text" value="{{$kegiatan->bulan}}" aria-label="Disabled input example" disabled readonly>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Jangka Waktu : </dt>
                    <input class="col-sm-4 form-control" type="text" value="{{$kegiatan->tanggal_mulai}} s/d {{$kegiatan->tanggal_akhir}}" aria-label="Disabled input example" disabled readonly>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Volume : </dt>
                    <input class="col-sm-4 form-control" type="text" value="{{$kegiatan->volume_total}}" aria-label="Disabled input example" disabled readonly>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Satuan : </dt>
                    <input class="col-sm-4 form-control" type="text" value="{{$kegiatan->satuan}}" aria-label="Disabled input example" disabled readonly>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Harga Satuan : </dt>
                    <input class="col-sm-4 form-control" type="text" value="{{$kegiatan->harga_satuan}}" aria-label="Disabled input example" disabled readonly>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Beban Anggaran : </dt>
                    <input class="col-sm-4 form-control" type="text" value="{{$kegiatan->beban_anggaran}}" aria-label="Disabled input example" disabled readonly>
                </dl>
            </dl>

        </div>
    
</div>
</main>

<br> 
<div class="card" style="margin-right:30px; margin-left:30px;">
    <div class="card-header pb-0">
        <div class="d-flex align-items-center">
            <p class=" text-center">Detail Pelaksana</p>
        </div>
    </div>
    <div class="card-body" >
        <div id="over">
            <table class="table table-hover table-bordered" id="datatables">
                <thead>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor HP</th>
                    <th>Pekerjaan</th>
                    <th>Rekening Bri</th>
                </thead>
                <tbody>

                    <tr>

                        <td>{{$mitra_baru->id}}</td>
                        <td>{{$mitra_baru->nama_mitra }}</td>
                        <td>{{$mitra_baru->email}}</td>
                        <td>{{$mitra_baru->kecamatan_id}}</td>
                        <td>{{$mitra_baru->desa_id}}</td>
                        <td>{{$mitra_baru->alamat}}</td>
                        <td>{{$mitra_baru->tanggal_lahir}}</td>
                        <td>{{$mitra_baru->jeniskelamin_id}}</td>
                        <td>{{$mitra_baru->no_hp}}</td>
                        <td>{{$mitra_baru->pekerjaan}}</td>
                        <td>{{$mitra_baru->rekening_bri}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection