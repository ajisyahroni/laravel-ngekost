<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DssFasilitasKamar extends Model
{
    public function kost()
    {
        return $this->belongsTo('App\DssKost');
    }
}
