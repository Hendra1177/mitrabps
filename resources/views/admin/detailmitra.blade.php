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
    <div class="card" style="margin-left:30px; margin-right:30px; margin-top:30px">
        <main class="container">
            @if (session('sukses'))
            <div class="alert alert-success fw-bold" role="alert">
                {{session('sukses')}}
            </div>
            @endif

            <br>
            <h3 class="text-center">Data Mitra</h3>
            <br>
        </main>
    </div>
</main>
<div class="container-fluid py-4 ">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-profile mx-3">
                <img src="{{asset('template/assets/img/Gedung.jpg')}}" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <img src="{{asset('template/assets/img/user.png')}}" class="rounded-circle img-fluid border border-2 border-white">
                        </div>
                        <p class="text-center">{{$mitra->nama_mitra}}</p>
                        <div class="card-body pt-0 py-6">

                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-grid text-center mx-4">
                                            <span class="text-sm font-weight-bolder">ID</span>
                                            <span class="text-sm opacity-8">{{$mitra->id }}</span>
                                        </div>

                                        <div class="d-grid text-center mx-4">
                                            <span class="text-sm font-weight-bolder">Target</span>
                                            <span class="text-sm opacity-8">{{$kegiatan_mitra->target}}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card " style="margin-right:15px">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class=" text-center">Detail Profil Mitra</p>
                    </div>
                </div>
                <div class="card-body ">

                    <dl class="row">
                        <dl class="row">
                            <dt class="col-sm-3">Nama </dt>
                            <dd class="col-sm-6">: {{$mitra->nama_mitra}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Pekerjaan </dt>
                            <dd class="col-sm-6">: {{$mitra->pekerjaan}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Alamat </dt>
                            <dd class="col-sm-6">: {{$mitra->alamat}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Kecamatan </dt>
                            <dd class="col-sm-6">: {{$mitra->kecamatan}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Desa </dt>
                            <dd class="col-sm-6">: {{$mitra->desa}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Nomor HP </dt>
                            <dd class="col-sm-6">: {{$mitra->no_hp}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Rekening BRI </dt>
                            <dd class="col-sm-6">: {{$mitra->rekening_bri}}</dd>
                        </dl>
                    </dl>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="card" style="margin-right:30px; margin-left:30px;">
    <div class="card-body" style="margin-right:15px; margin-left:15px;">
        <div id="over">
            <table class="table table-hover table-bordered" id="tablemitra">
                <thead>
                    <th>No</th>
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
                    @foreach($data_kegiatan as $kegiatan)
                    <td>{{$kegiatan_mitra->id}}</td>
                    <td>{{$kegiatan->nama_kegiatan}}</td>
                    <td>{{$kegiatan->bulan}}</td>
                    <td>{{$kegiatan->tanggal_mulai}} - {{$kegiatan->tanggal_akhir}}</td>
                    <td>{{$kegiatan->volume_total}}</td>
                    <td>{{$kegiatan->satuan}}</td>
                    <td>{{$kegiatan->harga_satuan}}</td>
                    <td>{{$kegiatan_mitra->nilai_perjanjian}}</td>
                    <td>{{$kegiatan->beban_anggaran}}</td>
@endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection