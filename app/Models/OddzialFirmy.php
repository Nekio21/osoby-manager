<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class OddzialFirmy extends Model
{
    protected $table = 'oddzialy_firmy';

    public function firma()
    {
        return $this->belongsTo(Firma::class, 'firma_id');
    }
}
