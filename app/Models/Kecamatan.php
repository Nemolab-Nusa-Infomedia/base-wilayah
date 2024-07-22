<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;
    protected $fillable = ['kode','wilayah','kabupaten_kode'];
    public function provinsis(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }
    public function kabupatens(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_kode', 'kode');
    }
    public function desas(): HasMany
    {
        return $this->hasMany(Desa::class);
    }
}
