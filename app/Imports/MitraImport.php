<?php

namespace App\Imports;

use App\Models\MitraBaru;
use Maatwebsite\Excel\Concerns\ToModel;

class MitraImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MitraBaru([
            'nama_mitra' => $row[1],
            'email' => $row[2],
            'kecamatan_id' => $row[3],
            'desa_id' => $row[4],
            'alamat' => $row[5],
            'tanggal_lahir' =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ($row[6]),
            'jeniskelamin_id' => $row[7],
            'no_hp' => $row[8],
            'pekerjaan' => $row[9],
            'rekening_bri' => $row[10],
        ]);
    }
}
