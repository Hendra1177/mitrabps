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
<body>
<div style="padding-top: 20px; padding-bottom:20px; padding-left: 20px; padding-right:20px; font-family:'Times New Roman', Times, serif;">
    <p style="padding-left:500px ;">
        Lampiran
    </p>
    <br>
    <p style="padding-left:500px; line-height:5px ;">PERJANJIAN KERJA</p>
    <p style="padding-left:500px ; line-height:5px;">BADAN PUSAT STATISTIK KABUPATEN JOMBANG</p>
    <p style="padding-left:500px ; line-height:5px;">NOMOR: 35171.{{$mitrabaru->id}}/SPK/ALL/(bulan angka)/2022
    </p>
    <br><br>
    <p style="font-weight:bold ; text-align:center;">
        DAFTAR URAIAN TUGAS, JANGKA WAKTU, NILAI PERJANJIAN, DAN BEBAN ANGGARAN
    </p>
</div>
    <div style="font-family:'Times New Roman', Times, serif ;">
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
                        <th colspan="6" class="text-center font-weight-normal" style="font-style:italic; text-transform:lowercase;">Terbilang: ({{terbilang($total)."rupiah"}})</th>
                        <td>{{"Rp ".format_uang($total)}}</td>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>

</body>
</html>