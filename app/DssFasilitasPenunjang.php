<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DssFasilitasPenunjang extends Model
{
    public function kost()
    {
        return $this->belongsTo('App\DssKost');
    }
}
