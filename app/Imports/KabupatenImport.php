<?php

namespace App\Imports;

use App\Models\Kabupaten;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KabupatenImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kabupaten([
            'kode' => $row['kode'],
            'wilayah' => $row['wilayah'],
            'provinsi_kode' => $row['provinsi_kode'],
        ]);
    }
}
