<!DOCTYPE html>
<html>

<head>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            padding: 10px;
        }

        .grid-container>div {

            text-align: center;
            padding: 20px 0;
            font-size: 14px;
        }

        .item3 {
            grid-column: 3 / 3;
        }
    </style>
</head>
<p style="font-size: 14px; font-weight:bold; font-family:'Times New Roman', Times, serif; text-align:center;">PERJANJIAN KERJA</p>
<p style="font-size: 14px; font-weight:bold; font-family:'Times New Roman', Times, serif; text-align:center; line-height: 10%;">BADAN PUSAT STATISTIK KABUPATEN JOMBANG</p>
@foreach($data as $data)
<p style="font-size: 14px; font-weight:bold; font-family:'Times New Roman', Times, serif; text-align:center; line-height: 30%; text-transform: uppercase;"><b>BULAN {{$data->bulan}} TAHUN {{$data->tahun}}</b></p>
<p style="font-size: 14px; font-weight:bold; font-family:'Times New Roman', Times, serif; text-align:center; line-height: 30%; text-transform: uppercase;"><b>NOMOR: 35171.{{$data->id}}/SPK/(kode kegiatan)/{{getRomawi($data->bulan)}}/{{$data->tahun}}</b></p>
@endforeach


<body>
    <div class="card cardspk" style="margin-right:20px; margin-left:20px; padding-right:20px; padding-left:20px; padding-top:20px; padding-bottom:90px;">
        <div class="card-body card-body-spk">
            <p style="font-size:14px; text-align:justify;">Pada hari ini {{$data->hari}}, tanggal {{tanggalTerbilang($data->tanggal)}}, bulan {{$data->bulan}}, tahun {{terbilang($data->tahun)}}, bertempat di Kantor BPS Kabupaten Jombang,
                yang bertanda tangan di bawah ini:
            </p>
            <div class="grid-container">
                <span class="item1">1</span>
                <span class="item2">{{$data->ppk}} :</span>
                <span class="item3" style="text-align:justify;">Pejabat Pembuat Komitmen Badan Pusat Statistik Kabupaten Jombang berkedudukan di
                    Jalan Airlangga No.46A Jombang, bertindak untuk dan atas nama Badan Pusat Statistik Kabupaten
                    Jombang, selanjutnya disebut sebagai PIHAK PERTAMA.</span>

            </div>
            <div class="grid-container">
                <span class="grid-item">2.</span>
                <span class="grid-item">{{$data->nama_mitra}} </span>
                <span class="grid-item"> : Pejabat Pembuat Komitmen Badan Pusat Statistik Kabupaten Jombang berkedudukan
                    di Jalan Airlangga No.46A Jombang, bertindak untuk dan atas nama Badan Pusat
                    Statistik Kabupaten Jombang, selanjutnya disebut sebagai <b>PIHAK PERTAMA</b>.
                </span>
            </div>
            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif; ">bahwa <b>PIHAK PERTAMA</b> dan <b>PIHAK KEDUA</b> yang secara bersama-sama disebut <b>PARA PIHAK</b>, sepakat untuk mengikatkan diri dalam Perjanjian Kerja
                pada kegiatan di Lingkungan Badan Pusat Statistik Kabupaten Jombang, yang selanjutnya disebut Perjanjian, dengan ketentuan-ketentuan sebagai berikut:</p>

            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 1</p>
            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif;"><b>PIHAK PERTAMA</b> memberikan pekerjaan kepada <b>PIHAK KEDUA</b> dan <b>PIHAK KEDUA</b> menerima pekerjaan dari <b>PIHAK PERTAMA</b> pada Badan Pusat Statistik
                Kabupaten Jombang dengan lingkup pekerjaan yang ditetapkan oleh <b>PIHAK PERTAMA</b>. </p>

            <br>

            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 2</p>
            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif;">Ruang lingkup pekerjaan dalam Perjanjian ini mengacu pada wilayah kerja dan beban kerja sebagaimana tertuang dalam Lampiran Perjanjian pada Badan Pusat Statistik
                Kabupaten Jombang, dan ketentuan-ketentuan yang ditetapkan oleh <b>PIHAK PERTAMA</b>.</p>
            <br>
            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 3</p>
            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif;">Jangka Waktu Perjanjian terhitung sejak tanggal {{tanggal_indonesia($data->tanggal_mulai)}} sampai dengan tanggal {{tanggal_indonesia($data->tanggal_akhir)}}.</p>
            <br>
            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 4</p>
            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif;"><b>PIHAK KEDUA</b> berkewajiban melaksanakan seluruh pekerjaan yang diberikan oleh <b>PIHAK PERTAMA</b> sampai selesai,
                sesuai ruang lingkup pekerjaan sebagaimana dimaksud dalam Pasal 2, dengan menerapkan protokol kesehatan pencegahan <em>Covid-19</em>
                yang berlaku di wilayah kerja masing-masing.</p>
            
            <p style="text-align:center ; font-size :14px;">[1]</p>
        </div>
    </div>
    <br>
    <div class="card cardspk" style="margin-right:20px; margin-left:20px; padding-right:20px; padding-left:20px; padding-top:20px; padding-bottom:90px;">
        <div class="card-body card-body-spk" style="margin-right:15px; margin-left:15px;">


            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 5</p>

            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(1)       <b>PIHAK KEDUA</b> berhak untuk mendapatkan honorarium Petugas dari <b>PIHAK PERTAMA</b>
            sebesar {{"Rp. ".format_uang($data->harga_satuan)}} ({{terbilang($data->harga_satuan)."rupiah "}}) untuk pekerjaan sebagaimana dimaksud dalam pasal 2,
            termasuk biaya pajak, bea material, pulsa dan kuota internet untuk komunikasi, dan jasa pelayanan
            keuangan.</pre>


            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(2)        <b>PIHAK KEDUA</b> tidak diberikan honorarium tambahan apabila melakukan kunjungan di luar
             jadwal atau terdapat tambahan waktu pelaksanaan pekerjaan lapangan/pengolahan.</pre>
            <br>
            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 6</p>


            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(1)        Pembayaran honorarium sebagaimana dimaksud dalam Pasal 5 dilakukan setelah <b>PIHAK KEDUA</b>
            menyelesaikan dan menyerahkan seluruh hasil pekerjaan sebagaimana dimaksud dalam Pasal 2 kepada
            <b>PIHAK PERTAMA</b>.</pre>

            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(2)        Pembayaran sebagaimana dimaksud pada ayat (1) dilakukan oleh <b>PIHAK PERTAMA</b> kepada
            <b>PIHAK KEDUA</b> sesuai dengan ketentuan peraturan perundang-undangan.</pre>
            <br>

            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 7</p>
            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif;">Penyerahan hasil pekerjaan pengolahan sebagaimana dimaksud dalam Pasal 2 dilakukan secara bertahap dan selambat-lambatnya seluruh hasil pekerjaan pengolahan diserahkan sesuai
                jadwal yang tercantum dalam Lampiran, yang dinyatakan dalam Berita Acara Serah Terima Hasil Pekerjaan yang ditandatangani oleh <b>PARA PIHAK</b>.</p>
            <br>
            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 8</p>
            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif;"><b>PIHAK PERTAMA</b> dapat memutuskan Perjanjian ini secara sepihak sewaktu-waktu dalam hal <b>PIHAK KEDUA</b> tidak dapat melaksanakan kewajibannya sebagaimana dimaksud dalam
                Pasal 4, termasuk dalam kondisi terindikasi terinfeksi virus <em>Covid-19</em>, dengan menertibkan Surat Pemutusan Perjanjian Kerja.</p>
            <br>

            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 9</p>

            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(1)       Apabila <b>PIHAK KEDUA</b> mengundurkan diri pada saat / setelah pelaksanaan pekerjaan pengolahan
            dengan tidak menyelesaikan pekerjaan yang menjadi tanggung jawabnya, maka wajib membayar 
            ganti rugi kepada <b>PIHAK PERTAMA</b> sebesar {{"Rp. ".format_uang($data->harga_satuan)}} ({{terbilang($data->harga_satuan)."Rupiah "}}). </pre>


            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(2)       Dikecualikan tidak membayar ganti rugi sebagaimana dimaksud pada ayat (1) kepada <b>PIHAK PERTAMA</b>,
            apabila <b>PIHAK KEDUA</b> meninggal dunia, mengundurkan diri karena sakit dengan keterangan rawat inap, 
            terindikasi terinfeksi virus <em>Covid-19</em>, kecelakaan dengan keterangan kepolisian, dan/atau telah diberikan
            Surat Pemutusan Perjanjian Kerja dari <b>PIHAK PERTAMA</b>.</pre>

            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(3)       Dalam hal terjadi peristiwa sebagaimana dimaksud pada ayat (2), <b>PIHAK PERTAMA</b> membayarkan
            honorarium kepada <b>PIHAK KEDUA</b> secara proporsional sesuai pekerjaan yang telah dilaksanakan.</pre>

            
            <p style="text-align:center ; font-size :14px;">[2]</p>

        </div>
    </div>
    <br>
    <div class="card cardspk" style="margin-right:20px; margin-left:20px; padding-right:20px; padding-left:20px; padding-top:20px; padding-bottom:90px;">
        <div class="card-body card-body-spk" style="margin-right:15px; margin-left:15px;">
            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 10</p>


            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(1)    Apabila terjadi Keadaan Kahar, yang meliputi bencana alam dan bencana sosial, <b>PIHAK KEDUA</b>
        memberitahukan kepada <b>PIHAK PERTAMA</b> dalam waktu paling lambat 7 (tujuh) hari sejak mengetahui
        atas kejadian Keadaan Kahar dengan menyertakan bukti.</pre>


            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(2)    Pada saat terjadi Keadaan Kahar, pelaksanaan pekerjaan oleh <b>PIHAK KEDUA</b> dihentikan sementara dan
        dilanjutkan kembali setelah Keaadan Kahar berakhir, namun apabila akibat Keadaan Kahar tidak memungkinkan
        dilanjutkan/diselesaikannya pelaksanaan, <b>PIHAK KEDUA</b> berhak menerima honorarium secara proporsional
        sesuai pekerjaan yang telah dilaksanakan.</pre>

            <br>

            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 11</p>

            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif;">Segala sesuatu yang belum atau tidak cukup diatur dalam Perjanjian ini, dituangkan dalam perjanjian tambahan/<em>addendum</em> dan merupakan bagian tidak terpisahkan dari
                perjanjian ini.</p>
            <br>

            <p style="text-align:center ; font-weight:bolder; font-size:14px; line-height:10px;">Pasal 12</p>


            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(1)    Segala perselisihan atau perbedaan pendapat yang timbul sebagai akibat adanya Perjanjian ini akan
         diselesaikan secar musyawarah untuk mufakat.</pre>

            <pre style="font-family:14px ; font-size:14px; font-family:'Times New Roman', Times, serif;">(2)    Apabila perselisihan tidak dapat diselesaikan sebagaimana dimaksud pada ayat (1), <b>PARA PIHAK</b>
         sepakat menyelesaikan perselisihan dengan memilih kedudukan/domisili hukum di Panitera Pengadilan
         Negeri Jombang.</pre>

            <p style="text-align:justify; font-size:14px;  font-family:'Times New Roman', Times, serif;">Demikian Perjanjian ini dibuat dan ditandatangani oleh <b>PARA PIHAK</b> dalam 2 (dua) rangkap asli bermeterai cukup, tanpa paksaan dari <b>PIHAK</b> manapun
                dan untuk dilaksanakan oleh <b>PARA PIHAK</b>.</p>
            <br>


            <pre style="font-family:'Times New Roman', Times, serif ;"><b>PIHAK KEDUA,</b>                                                                                  <b>PIHAK PERTAMA,</b></pre>
            <!-- <p class="col-6"><b>PIHAK PERTAMA,</b></p> -->

            <br><br><br><br>

            <pre style="font-family:'Times New Roman', Times, serif ;">     {{$data->nama_mitra}}                                                                                                    {{$data->ppk}}</pre>



            <br><br><br><br><br><br><br><br>
            <p style="text-align:center ;">[3]</p>
        </div>
    </div>
</body>

</html>