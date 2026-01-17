<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Firma extends Model
{
    protected $table = 'firmy';


    public function oddzialy()
    {
        return $this->hasMany(OddzialFirmy::class, 'firma_id');
    }
}
