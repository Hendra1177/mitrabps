<?php
function tanggalTerbilang($tgl)
{
    $tgl = abs($tgl);
    $baca = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");

    $terbilangTanggal = "";
    if ($tgl < 12) {
        $terbilangTanggal = " " . $baca[$tgl];
    } else if ($tgl < 20) {
        $terbilangTanggal = tanggalTerbilang($tgl - 10) . " Belas";
    } else if ($tgl < 100) {
        $terbilangTanggal = tanggalTerbilang($tgl / 10) . " Puluh" . tanggalTerbilang($tgl % 10);
    }
    return $terbilangTanggal;
}
