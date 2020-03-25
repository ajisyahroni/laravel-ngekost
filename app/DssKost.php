<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DssKost extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
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
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function fasilitasKamar()
    {
        return $this->hasOne('App\DssFasilitasKamar', 'id', 'id_fasilitas_kamar');
    }

    public function fasilitasPenunjang()
    {
        return $this->hasOne('App\DssFasilitasPenunjang', 'id', 'id_fasilitas_penunjang');
    }

    public function fasilitasLingkungan()
    {
        return $this->hasOne('App\DssFasilitasLingkungan', 'id', 'id_fasilitas_lingkungan');
    }
}
