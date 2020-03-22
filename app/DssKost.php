<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DssKost extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'jarak',
        'luas_kamar',
        'foto',
        'tipe',
        'id_fasilitas_kamar',
        'id_fasilitas_penunjang',
        'id_fasilitas_lingkungan'
    ];
}
