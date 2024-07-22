<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function cariDesa(Request $request)
    {
        $search = $request->input('term');
        $results = Desa::with('kecamatans.kabupatens.provinsis')
            ->where('wilayah', 'LIKE', '%' . $search . '%')
            ->take(6)
            ->get();

        $response = [];
        foreach ($results as $desa) {
            $response[] = [
                'kode' => $desa->kode,
                'value' => $desa->wilayah,
                'kecamatan' => $desa->kecamatans->wilayah,
                'kode_kecamatan' => $desa->kecamatans->kode,
                'kabupaten' => $desa->kecamatans->kabupatens->wilayah,
                'kode_kabupaten' => $desa->kecamatans->kabupatens->kode,
                'provinsi' => $desa->kecamatans->kabupatens->provinsis->wilayah,
                'kode_provinsi' => $desa->kecamatans->kabupatens->provinsis->kode
            ];
        }

        return response()->json($response);
    }
}
