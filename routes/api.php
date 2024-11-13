<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/v1/get-desa', [ApiController::class, 'cariDesa']);
Route::get('/v1/get-kecamatan', [ApiController::class, 'cariKecamatan']);
Route::get('/v1/get-kabupaten', [ApiController::class, 'cariKabupaten']);
Route::get('/v1/get-provinsi', [ApiController::class, 'cariProvinsi']);
