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
                    <th>Uraian Kegiatan</th>
                    <th>Bulan</th>
                    <th>Jangka Waktu</th>
                    <th>Volume</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Nilai Perjanjian</th>
                    <th>Beban Anggaran</th>
                </thead>
                <tbody>

                    <tr>

                        <td>{{$kegiatan_mitra->id}}</td>
                        <td>{{$kegiatan_mitra->kegiatan_id}}</td>
                        <td>{{$kegiatan->bulan}}</td>
                        <td>{{$kegiatan->tanggal_mulai}} - {{$kegiatan->tanggal_akhir}}</td>
                        <td>{{$kegiatan->volume_total}}</td>
                        <td>{{$kegiatan->satuan}}</td>
                        <td>{{$kegiatan->harga_satuan}}</td>
                        <td>{{$kegiatan_mitra->nilai_perjanjian}}</td>
                        <td>{{$kegiatan->beban_anggaran}}</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection