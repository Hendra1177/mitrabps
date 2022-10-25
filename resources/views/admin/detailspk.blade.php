@extends('admin.layoutspk')
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
            <h3 class="text-center">SURAT PERJANJIAN KERJA</h3>
            <br>
        </main>
    </div>
</main>
<div class="container-fluid py-3">
</div>

<div class="card cardspk" style="margin-right:30px; margin-left:30px; padding-right:100px; padding-left:100px; padding-top:90px; padding-bottom:110px;">
    <div class="card-body card-body-spk" style="margin-right:15px; margin-left:15px;">
        <p class="h6 text-center fw-bold">PERJANJIAN KERJA</p>
        <p class="h6 text-center fw-bold">BADAN PUSAT STATISTIK KABUPATEN JOMBANG</p>
        @foreach($data as $data)
        <p class="text-uppercase text-center fw-bold">BULAN {{$data->bulan}} TAHUN {{$data->tahun}}</p>
        <p class="h6 text-center fw-bold text-uppercase">NOMOR: 35171.{{$data->id}}/SPK/(kode kegiatan)/{{bulan($data->bulan)}}/{{$data->tahun}}</p>
        @endforeach
        <br><br>

        <p>Pada hari ini {{$data->hari}}, tanggal {{tanggalTerbilang($data->tanggal)}}, bulan {{$data->bulan}}, tahun (need help), bertempat di Kantor BPS Kabupaten Jombang,
            yang bertanda tangan di bawah ini:
        </p>
        <dl class="row">
  <p class="col-sm-3">{{$data->ppk}}     :</p>
  <p class="col-sm-9">Pejabat Pembuat Komitmen Badan Pusat Statistik Kabupaten Jombang,
berkedudukan di Jalan Airlangga No.46A Jombang, bertindak untuk dan atas nama
Badan Pusat Statistik Kabupaten Jombang, selanjutnya disebut sebagai <b>PIHAK PERTAMA</b>.
  </p>
        </dl>

        <dl class="row">
    <p class="col-sm-3">{{$data->nama_mitra}}      :</p>
    <p class="col-sm-9"> <big class="text-uppercase">{{$data->pekerjaan}}</big>, berkedudukan di {{$data->alamat}} Kec. {{$data->nama_kecamatan}} Kab.Jombang, bertindak
 untuk dan atas nama sendiri, selanjutnya disebut <b>PIHAK KEDUA</b>.
  </p>
        </dl>
  <br> 
  <p>bahwa <b>PIHAK PERTAMA</b> dan <b>PIHAK KEDUA</b> yang secara bersama-sama disebut <b>PARA PIHAK</b>, sepakat untuk mengikatkan diri dalam Perjanjian Kerja
pada kegiatan di Lingkungan Badan Pusat Statistik Kabupaten Jombang, yang selanjutnya disebut Perjanjian, dengan ketentuan-ketentuan sebagai berikut:</p>

<p class="text-center fw-bold">Pasal 1</p>
<p><b>PIHAK PERTAMA</b> memberikan pekerjaan kepada <b>PIHAK KEDUA</b> dan <b>PIHAK KEDUA</b> menerima pekerjaan dari <b>PIHAK PERTAMA</b> pada Badan Pusat Statistik
Kabupaten Jombang dengan lingkup pekerjaan yang ditetapkan oleh <b>PIHAK PERTAMA</b>. </p>

<p class="text-center fw-bold">Pasal 2</p>
<p>Ruang lingkup pekerjaan dalam Perjanjian ini mengacu pada wilayah kerja dan beban kerja sebagaimana tertuang dalam Lampiran Perjanjian pada Badan Pusat Statistik
    Kabupaten Jombang, dan ketentuan-ketentuan yang ditetapkan oleh <b>PIHAK PERTAMA</b>.</p>
<p class="text-center fw-bold">Pasal 3</p>
<p>Jangka Waktu Perjanjian terhitung sejak tanggal {{tanggal_indonesia($data->tanggal_mulai)}} sampai dengan tanggal {{tanggal_indonesia($data->tanggal_akhir)}}.</p>
<br><br><br><br><br><br>
<p class="text-center">[1]</p>
    </div>
</div>
<br>
<div class="card" style="margin-right:30px; margin-left:30px; padding-right:100px; padding-left:100px; padding-top:90px; padding-bottom:110px;">
    <div class="card-body" style="margin-right:15px; margin-left:15px;">
    <p class="text-center fw-bold">Pasal 4</p>
<p><b>PIHAK KEDUA</b> berkewajiban melaksanakan seluruh pekerjaan yang diberikan oleh <b>PIHAK PERTAMA</b> sampai selesai,
sesuai ruang lingkup pekerjaan sebagaimana dimaksud dalam Pasal 2, dengan menerapkan protokol kesehatan pencegahan <em>Covid-19</em>
yang berlaku di wilayah kerja masing-masing.</p>

<p class="text-center fw-bold">Pasal 5</p>

<dl class="row">
<p class="col-1">(1)</p>
<p class="col"><b>PIHAK KEDUA</b> berhak untuk mendapatkan honorarium Petugas dari <b>PIHAK PERTAMA</b> sebesar Rp.{{"Rp. ".format_uang($data->harga_satuan)}} ({{terbilang($data->harga_satuan)."rupiah "}})  untuk pekerjaan sebagaimana dimaksud dalam pasal 2, termasuk biaya pajak,
bea material, pulsa dan kuota internet untuk komunikasi, dan jasa pelayanan keuangan.</p>
</dl>
<dl class="row">
<p class="col-1">(2)</p>
<p class="col"><b>PIHAK KEDUA</b> tidak diberikan honorarium tambahan apabila melakukan kunjungan di luar jadwal atau terdapat tambahan waktu pelaksanaan pekerjaan lapangan/pengolahan.</p>
</dl>
<p class="text-center fw-bold">Pasal 6</p>

<dl class="row">
<p class="col-1">(1)</p>
<p class="col">Pembayaran honorarium sebagaimana dimaksud dalam Pasal 5 dilakukan setelah <b>PIHAK KEDUA</b> menyelesaikan dan menyerahkan seluruh hasil pekerjaan sebagaimana
dimaksud dalam Pasal 2 kepada <b>PIHAK PERTAMA</b></p>
</dl>
<dl class="row">
<p class="col-1">(2)</p>
<p class="col">Pembayaran sebagaimana dimaksud pada ayat (1) dilakukan oleh <b>PIHAK PERTAMA</b> kepada <b>PIHAK KEDUA</b> sesuai dengan ketentuan peraturan perundang-undangan.</p>
</dl>
<p class="text-center fw-bold">Pasal 7</p>
<p>Penyerahan hasil pekerjaan pengolahan sebagaimana dimaksud dalam Pasal 2 dilakukan secara bertahap dan selambat-lambatnya seluruh hasil pekerjaan pengolahan diserahkan sesuai
jadwal yang tercantum dalam Lampiran, yang dinyatakan dalam Berita Acara Serah Terima Hasil Pekerjaan yang ditandatangani oleh <b>PARA PIHAK</b>.</p>

<p class="text-center fw-bold">Pasal 8</p>
<p><b>PIHAK PERTAMA</b> dapat memutuskan Perjanjian ini secara sepihak sewaktu-waktu dalam hal <b>PIHAK KEDUA</b> tidak dapat melaksanakan kewajibannya sebagaimana dimaksud dalam
Pasal 4, termasuk dalam kondisi terindikasi terinfeksi virus <em>Covid-19</em>, dengan menertibkan Surat Pemutusan Perjanjian Kerja.</p>

<p class="text-center fw-bold">Pasal 9</p>

<dl class="row">
<p class="col-1">(1)</p>
<p class="col">Apabila <b>PIHAK KEDUA</b> mengundurkan diri pada saat / setelah pelaksanaan pekerjaan pengolahan dengan tidak menyelesaikan pekerjaan yang menjadi tanggung jawabnya,
maka wajib membayar ganti rugi kepada <b>PIHAK PERTAMA</b> sebesar Rp.{{"Rp. ".format_uang($data->harga_satuan)}} ({{terbilang($data->harga_satuan)."rupiah "}}) </p>
</dl>
<dl class="row">
<p class="col-1">(2)</p>
<p class="col">Dikecualikan tidak membayar ganti rugi sebagaimana dimaksud pada ayat (1) kepada <b>PIHAK PERTAMA</b>, apabila <b>PIHAK KEDUA</b> meninggal dunia, mengundurkan diri karena
sakit dengan keterangan rawat inap, terindikasi terinfeksi virus <em>Covid-19</em>,</p>
</dl>
<br><br><br><br><br><br>
<p class="text-center">[2]</p>

    </div>
</div>
<br>
<div class="card" style="margin-right:30px; margin-left:30px; padding-right:100px; padding-left:100px; padding-top:90px; padding-bottom:110px;">
    <div class="card-body" style="margin-right:15px; margin-left:15px;">
    <p>kecelakaan dengan keterangan kepolisian, dan/atau telah diberikan Surat Pemutusan Perjanjian Kerja dari <b>PIHAK PERTAMA</b>.</p>
    <dl class="row">
<p class="col-1">(3)</p>
<p class="col">Dalam hal terjadi peristiwa sebagaimana dimaksud pada ayat (2), <b>PIHAK PERTAMA</b> membayarkan honorarium kepada <b>PIHAK KEDUA</b> secara proporsional
sesuai pekerjaan yang telah dilaksanakan.</p>
</dl>
<p class="text-center fw-bold">Pasal 10</p>

<dl class="row">
<p class="col-1">(1)</p>
<p class="col">Apabila terjadi Keadaan Kahar, yang meliputi bencana alam dan bencana sosial, <b>PIHAK KEDUA</b> memberitahukan kepada <b>PIHAK PERTAMA</b> dalam waktu paling lambat
7 (tujuh) hari sejak mengetahui atas kejadian Keadaan Kahar dengan menyertakan bukti.</p>
</dl>
<dl class="row">
<p class="col-1">(2)</p>
<p class="col">Pada saat terjadi Keadaan Kahar, pelaksanaan pekerjaan oleh <b>PIHAK KEDUA</b> dihentikan sementara dan dilanjutkan kembali setelah Keaadan Kahar berakhir,
namun apabila akibat Keadaan Kahar tidak memungkinkan dilanjutkan/diselesaikannya pelaksanaan, <b>PIHAK KEDUA</b> berhak menerima honorarium secara proporsional sesuai pekerjaan yang telah dilaksanakan.</p>
</dl>

<p class="text-center fw-bold">Pasal 11</p>

<p>Segala sesuatu yang belum atau tidak cukup diatur dalam Perjanjian ini, dituangkan dalam perjanjian tambahan/<em>addendum</em> dan merupakan bagian tidak terpisahkan dari 
perjanjian ini.</p>

<p class="text-center fw-bold">Pasal 12</p>

<dl class="row">
<p class="col-1">(1)</p>
<p class="col">Segala perselisihan atau perbedaan pendapat yang timbul sebagai akibat adanya Perjanjian ini akan diselesaikan secar musyawarah untuk mufakat.</p>
</dl>
<dl class="row">
<p class="col-1">(2)</p>
<p class="col">Apabila perselisihan tidak dapat diselesaikan sebagaimana dimaksud pada ayat (1), <b>PARA PIHAK</b> sepakat menyelesaikan perselisihan dengan memilih
kedudukan/domisili hukum di Panitera Pengadilan Negeri Jombang.</p>
</dl>

<p>Demikian Perjanjian ini dibuat dan ditandatangani oleh <b>PARA PIHAK</b> dalam 2 (dua) rangkap asli bermeterai cukup, tanpa paksaan dari <b>PIHAK</b> manapun
dan untuk dilaksanakan oleh <b>PARA PIHAK</b>.</p>
<br>

<div class="container text-center">
<dl class="row  ">
<p class="col-6 "><b>PIHAK KEDUA,</b></p>
<p class="col-6"><b>PIHAK PERTAMA,</b></p>
</dl>
<br><br><br><br>
<dl class="row ">
<p class="col-6 ">{{$data->nama_mitra}}</p>
<p class="col-6">{{$data->ppk}}</p>
</dl>
</div>

<br><br><br><br><br><br>
<p class="text-center">[3]</p>

    </div>
</div>
@endsection