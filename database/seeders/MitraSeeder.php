<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mitra = [
            [
                'nama_mitra' => 'Agus wahyudi',
                'pekerjaan' => 'wiraswasta',
                'alamat' => 'Dusun yyy',
                'desa' => 'Karangpakis',
                'kecamatan' => 'Kabuh',
                'no_hp' => '082381239191',
                'rekening_bri' => '341485185815818'
            ],
            [
                'nama_mitra' => 'Agus sumarso',
                'pekerjaan' => 'petani',
                'alamat' => 'Dusun yyy',
                'desa' => 'Ploso',
                'kecamatan' => 'ploso',
                'no_hp' => '084221239191',
                'rekening_bri' => '342385185815818'
            ],
            [
                'nama_mitra' => 'Karso',
                'pekerjaan' => 'wiraswasta',
                'alamat' => 'Dusun yyy',
                'desa' => 'xyz',
                'kecamatan' => 'peterongan',
                'no_hp' => '082381239744',
                'rekening_bri' => '542485185815818'
            ],
            [
                'nama_mitra' => 'Sumarni',
                'pekerjaan' => 'wirausaha',
                'alamat' => 'Dusun yyy',
                'desa' => 'xyz',
                'kecamatan' => 'ploso',
                'no_hp' => '087781239191',
                'rekening_bri' => '341485185815818'
            ],
            [
                'nama_mitra' => 'Burhan',
                'pekerjaan' => 'dukun',
                'alamat' => 'Dusun yyy',
                'desa' => 'xyz',
                'kecamatan' => 'Kabuh',
                'no_hp' => '082381111191',
                'rekening_bri' => '341477785815818'
            ],
        ];

        DB::table('mitra')->insert($mitra);
    }
}
