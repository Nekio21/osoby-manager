<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Miejscowosc extends Model
{
    protected $table = 'miejscowosci';

    public function osoby()
    {
        return $this->hasMany(Osoba::class);
    }
}
