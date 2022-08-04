<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kegiatan = [
            [
                'nama_kegiatan' => 'Pendataan',
                'bulan' => 'September',
                'tanggal_mulai' => '2022-09-17',
                'tanggal_akhir' => '2022-09-19',
                'beban_anggaran' => '2905.QMA.006',
                'volume_total' => '1 tahun',
                'satuan' => 'RM',
                'harga_satuan' => '28000'
            ],
            [
                'nama_kegiatan' => 'Pendataan wilayah',
                'bulan' => 'September',
                'tanggal_mulai' => '2022-02-12',
                'tanggal_akhir' => '2022-02-24',
                'beban_anggaran' => '2705.QMA.006',
                'volume_total' => '1 tahun',
                'satuan' => 'RM',
                'harga_satuan' => '20000'
            ],
            [
                'nama_kegiatan' => 'Belanja Barang',
                'bulan' => 'September',
                'tanggal_mulai' => '2022-03-23',
                'tanggal_akhir' => '2022-03-30',
                'beban_anggaran' => '0405.QMA.006',
                'volume_total' => '1.0 paket',
                'satuan' => 'RM',
                'harga_satuan' => '140000'
            ],
            [
                'nama_kegiatan' => 'Belanja Langganan Listrik',
                'bulan' => 'September',
                'tanggal_mulai' => '2022-01-12',
                'tanggal_akhir' => '2022-01-19',
                'beban_anggaran' => '0205.QMA.006',
                'volume_total' => '6.0 O-B',
                'satuan' => 'RM',
                'harga_satuan' => '24000'
            ],
            [
                'nama_kegiatan' => 'Belanja Langganan Telepon',
                'bulan' => 'September',
                'tanggal_mulai' => '2022-09-19',
                'tanggal_akhir' => '2022-09-28',
                'beban_anggaran' => '2905.QMA.006',
                'volume_total' => '1 tahun',
                'satuan' => 'RM',
                'harga_satuan' => '40000'
            ],
        ];

        DB::table('kegiatan')->insert($kegiatan);
    }
}
