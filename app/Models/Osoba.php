<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Osoba extends Model
{
    protected $table = 'osoby';

    protected $fillable = [
        'imie',
        'nazwisko',
        'data_urodzenia',
        'miejscowosc_id',
        'firma_id',
        'oddzial_firmy_id'
    ];


    public function getWiekAttribute()
    {
        return Carbon::parse($this->data_urodzenia)->age;
    }

    public function getPlecAttribute()
    {
        return substr($this->imie, offset: -1) === 'a' ? 'K' : 'M';
    }

    public function firma()
    {
        return $this->belongsTo(Firma::class);
    }

    public function oddzial()
    {
        return $this->belongsTo(OddzialFirmy::class, 'oddzial_firmy_id');
    }

    public function miejscowosc()
    {
        return $this->belongsTo(Miejscowosc::class);
    }
}
