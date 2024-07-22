<?php

namespace App\Models;

use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desa extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['kode','wilayah','kecamatan_kode'];
    public function provinsis(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }
    public function kabupatens(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }
    public function kecamatans(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_kode', 'kode');
    }
}
