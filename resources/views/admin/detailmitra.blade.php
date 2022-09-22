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
                        <p class="text-center">{{$mitra_baru->nama_mitra}}</p>
                        <div class="card-body pt-0 py-6">

                            <div class="row">
                                <div class="col">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-grid text-center mx-4">
                                            <span class="text-sm font-weight-bolder">ID</span>
                                            <span class="text-sm opacity-8">{{$mitra_baru->id }}</span>
                                        </div>
                                        <div class="d-grid text-center mx-4">
                                            <span class="text-sm font-weight-bolder">Total Target</span>
                                            <span class="text-sm opacity-8">{{$targetmitra}}</span>
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
                            <dd class="col-sm-6">: {{$mitra_baru->nama_mitra}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Email </dt>
                            <dd class="col-sm-6">: {{$mitra_baru->email}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Pekerjaan </dt>
                            <dd class="col-sm-8">: {{$mitra_baru->pekerjaan}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Alamat </dt>
                            <dd class="col-sm-6">: {{$mitra_baru->alamat}}</dd>
                        </dl>
                        @foreach($daftar_mitra as $daftar_mitra)
                        <dl class="row">
                            <dt class="col-sm-3">Kecamatan </dt>
                            <dd class="col-sm-6">: {{$daftar_mitra->nama_kecamatan}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Desa </dt>
                            <dd class="col-sm-6">: {{$daftar_mitra->nama_desa}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">JenisKelamin </dt>
                            <dd class="col-sm-6">: {{$daftar_mitra->kelamin}}</dd>
                        </dl>
                        @endforeach
                        <dl class="row">
                            <dt class="col-sm-3">Nomor HP </dt>
                            <dd class="col-sm-6">: {{"0".$mitra_baru->no_hp}}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Rekening BRI </dt>
                            <dd class="col-sm-6">: {{$mitra_baru->rekening_bri}}</dd>
                        </dl>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card cardspk" style="margin-right:30px; margin-left:30px;">
    <div class="card-body card-body-spk" style="margin-right:15px; margin-left:15px;">
        <a href="/admin/mitra/{{$mitra_baru->id}}/cetakpdfmitra" class="btn btn-danger btn-md" style="padding-left:12px; padding-right:12px; padding-top:7px; padding-bottom:7px">PDF</a>
        <!-- {{-- <div class="row">
            <div class="col-10">

            </div>
            <div class="col-2">
                <label>Bulan:</label>
                <select id="filter-bulan" class="form-input form-select-sm filter" aria-label="Default select example" name="bulan">
                    <option value="">-Pilih Bulan-</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
                  </select>
            </div>
        </div> --}} -->
        
          
        <div id="over">
            <table class="table table-hover table-bordered" id="tablemitra">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center">No</th>
                        <th rowspan="2" class="text-center">Uraian Tugas</th>
                        <th rowspan="2" class="text-center">Jangka Waktu</th>
                        <th colspan="2" class="text-center">Target Pekerjaan</th>
                        <th rowspan="2" class="text-center">Harga Satuan</th>
                        <th rowspan="2" class="text-center">Nilai Perjanjian</th>
                        <th rowspan="2" class="text-center">Beban Anggaran</th>
                    </tr>
                    <tr>
                        <th class="text-center">Volume</th>
                        <th class="text-center">Satuan</th>
                    </tr>
                    {{-- <th scope="col">No</th>
                    <th>Uraian Kegiatan</th>
                    <th>Bulan</th>
                    <th>Jangka Waktu</th>
                    <th>Volume</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Target</th>
                    <th>Nilai Perjanjian</th>
                    <th>Beban Anggaran</th> --}}
                </thead>
                <tbody>
                <?php $no=1;?>
                    @foreach($data_kegiatan as $data_kegiatan )
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$data_kegiatan->nama_kegiatan}}</td>
                            <td>{{ tanggal_indonesia($data_kegiatan->tanggal_mulai)}} - {{ tanggal_indonesia($data_kegiatan->tanggal_akhir)}}</td>
                            <td>{{$data_kegiatan->volume_total}}</td>
                            <td>{{$data_kegiatan->satuan}}</td>
                            <td>{{"Rp ".format_uang($data_kegiatan->harga_satuan)}}</td>
                            {{-- <td>{{$data_kegiatan->target}}</td> --}}
                            <td>{{"Rp ".format_uang($data_kegiatan->nilai_perjanjian)}}</td>
                            <td>{{$data_kegiatan->beban_anggaran}}</td>
                        </tr>
                        <?php $no++ ;?>
                    @endforeach
                {{-- @foreach($data_kegiatan as $data_kegiatan )
                    <tr>
                    
                        <th scope="row">  {{$no}}</th>
                        <td>{{$data_kegiatan->nama_kegiatan}}</td>
                        <td>{{$data_kegiatan->bulan}}</td>
                        <td>{{$data_kegiatan->tanggal_mulai}} - {{$data_kegiatan->tanggal_akhir}}</td>
                        <td>{{$data_kegiatan->volume_total}}</td>
                        <td>{{$data_kegiatan->satuan}}</td>
                        <td>{{$data_kegiatan->harga_satuan}}</td>
                        <td>{{$data_kegiatan->target}}</td>
                        <td>{{$data_kegiatan->nilai_perjanjian}}</td>
                        <td>{{$data_kegiatan->beban_anggaran}}</td>
                        
                    </tr>
                    <?php $no++ ;?>
                    @endforeach --}}
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="6" class="text-center">Total</th>
                        <td>{{"Rp ".format_uang($total)}}</td>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
        

        $(".filter").on('change', function(){
            // console.log("Filter ini");
            bulan = $("#filter-bulan").val()
            console.log(bulan);
            table.ajax.reload(null, false)
        })
</script>
</main>

@endsection