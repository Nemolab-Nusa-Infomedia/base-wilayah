<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function cariDesa(Request $request)
    {
        $search = $request->input('term');
        $results = Desa::with('kecamatans.kabupatens.provinsis')
            ->where('wilayah', 'LIKE', '%' . $search . '%')
            ->take(12)
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
    
    public function cariKecamatan(Request $request)
    {
        $search = $request->input('term');
        $results = Kecamatan::with('kabupatens.provinsis')
        ->where('wilayah', 'LIKE', '%' . $search . '%')
        ->take(12)
        ->get();
        
        $response = [];
        foreach ($results as $kecamatan) {
            $response[] = [
                'kode' => $kecamatan->kode,
                'value' => $kecamatan->wilayah,
                'kabupaten' => $kecamatan->kabupatens->wilayah,
                'kode_kabupaten' => $kecamatan->kabupatens->kode,
                'provinsi' => $kecamatan->kabupatens->provinsis->wilayah,
                'kode_provinsi' => $kecamatan->kabupatens->provinsis->kode
            ];
        }
        
        return response()->json($response);
    }
    
    public function cariKabupaten(Request $request)
    {
        $search = $request->input('term');
        $results = Kabupaten::with('provinsis')
            ->where('wilayah', 'LIKE', '%' . $search . '%')
            ->take(12)
            ->get();

        $response = [];
        foreach ($results as $kabupaten) {
            $response[] = [
                'kode' => $kabupaten->kode,
                'value' => $kabupaten->wilayah,
                'provinsi' => $kabupaten->provinsis->wilayah,
                'kode_provinsi' => $kabupaten->provinsis->kode
            ];
        }

        return response()->json($response);
    }
    
    public function cariProvinsi(Request $request)
    {
        $search = $request->input('term');
        $results = Provinsi::where('wilayah', 'LIKE', '%' . $search . '%')
            ->take(12)
            ->get();

        $response = [];
        foreach ($results as $provinsi) {
            $response[] = [
                'kode' => $provinsi->kode,
                'value' => $provinsi->wilayah
            ];
        }

        return response()->json($response);
    }
}