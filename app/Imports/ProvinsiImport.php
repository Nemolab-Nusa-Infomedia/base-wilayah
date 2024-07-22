<?php

namespace App\Imports;

use App\Models\Provinsi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProvinsiImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Provinsi([
            'kode' => $row['kode'],
            'wilayah' => $row['wilayah'],
        ]);
    }
}
