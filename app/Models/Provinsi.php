<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provinsi extends Model
{
    use HasFactory;
    protected $fillable = ['kode','wilayah'];
    public function kabupatens(): HasMany
    {
        return $this->hasMany(Kabupaten::class);
    }
    public function kecamatans(): HasMany
    {
        return $this->hasMany(Kecamatan::class);
    }
    public function desas(): HasMany
    {
        return $this->hasMany(Desa::class);
    }
}
