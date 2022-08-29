@extends ('Kemitraan.layoutkegiatan')
@section('content')
@section('Kegiatan', 'active')

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

    <div class="card" style="margin-left:30px; margin-right:30px; margin-top:255px">
        <div class="card-header pb-0 py-2">
            <div class="align-items-center">
                <h2 class="text-center">Data Kegiatan</h3>
            </div>
        </div>

        <div class="card-body">
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
                            <a href="/kegiatan/formkegiatan " class="btn btn-primary" role="button">Tambah Kegiatan</a>
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
                                        <a href="/kegiatan/{{$kegiatan->id}}/detail" class="btn btn-info btn-sm">View</a>
                                        <a href="/kegiatan/{{$kegiatan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection