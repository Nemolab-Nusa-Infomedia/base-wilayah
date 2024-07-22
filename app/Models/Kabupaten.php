<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kabupaten extends Model
{
    use HasFactory;
    protected $fillable = ['kode','wilayah','provinsi_kode'];

    public function provinsis(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_kode', 'kode');
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
