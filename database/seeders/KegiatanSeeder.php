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
                'tanggal_pelaksana' => '2022-09-17',
                'beban_anggaran' => '2905.QMA.006',
                'volume_total' => '1 tahun',
                'satuan' => 'RM',
                'harga_satuan' => '28000'
            ],
            [
                'nama_kegiatan' => 'Pendataan wilayah',
                'tanggal_pelaksana' => '2022-02-12',
                'beban_anggaran' => '2705.QMA.006',
                'volume_total' => '1 tahun',
                'satuan' => 'RM',
                'harga_satuan' => '20000'
            ],
            [
                'nama_kegiatan' => 'Belanja Barang',
                'tanggal_pelaksana' => '2022-03-23',
                'beban_anggaran' => '0405.QMA.006',
                'volume_total' => '1.0 paket',
                'satuan' => 'RM',
                'harga_satuan' => '140000'
            ],
            [
                'nama_kegiatan' => 'Belanja Langganan Listrik',
                'tanggal_pelaksana' => '2022-01-12',
                'beban_anggaran' => '0205.QMA.006',
                'volume_total' => '6.0 O-B',
                'satuan' => 'RM',
                'harga_satuan' => '24000'
            ],
            [
                'nama_kegiatan' => 'Belanja Langganan Telepon',
                'tanggal_pelaksana' => '2022-09-19',
                'beban_anggaran' => '2905.QMA.006',
                'volume_total' => '1 tahun',
                'satuan' => 'RM',
                'harga_satuan' => '40000'
            ],
        ];

        DB::table('kegiatan')->insert($kegiatan);
    }
}
