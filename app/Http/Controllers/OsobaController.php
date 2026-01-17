<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Osoba;
use App\Models\Firma;
use App\Models\Miejscowosc;
use App\Models\OddzialFirmy;

class OsobaController extends Controller
{
    public function index()
    {
        $osoby = Osoba::all();

        return view('osoby.index', ['osoby' => $osoby]);
    }

    public function create()
    {
        $miejscowosci = Miejscowosc::all();
        $firmy = Firma::all();
        $oddzialy = OddzialFirmy::all();
        $osoba = new Osoba();
        return view('osoby.create', compact('osoba', 'miejscowosci', 'firmy', 'oddzialy'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'imie' => 'required|string',
            'nazwisko' => 'required|string',
            'data_urodzenia' => 'required|date',
            'miejscowosc_id' => 'required|exists:miejscowosci,id',
            'firma_id' => 'required|exists:firmy,id',
            'oddzial_firmy_id' => 'required|exists:oddzialy_firmy,id',
        ]);

        Osoba::create($request->all());

        return redirect('/osoby')->with('success', 'Osoba dodana!');
    }

    public function edit(Osoba $osoba)
    {
        $miejscowosci = Miejscowosc::all();
        $firmy = Firma::all();
        $oddzialy = OddzialFirmy::all();
        return view('osoby.edit', compact('osoba', 'miejscowosci', 'firmy', 'oddzialy'));
    }

    public function update(Request $request, Osoba $osoba)
    {
        $request->validate([
            'imie' => 'required|string',
            'nazwisko' => 'required|string',
            'data_urodzenia' => 'required|date',
            'miejscowosc_id' => 'required|exists:miejscowosci,id',
            'firma_id' => 'required|exists:firmy,id',
            'oddzial_firmy_id' => 'required|exists:oddzialy_firmy,id',
        ]);

        $osoba->update($request->all());
        return redirect('/osoby')->with('success', 'Osoba zaktualizowana!');
    }

    public function destroy(Osoba $osoba)
    {
        $osoba->delete();
        return redirect('/osoby');
    }
}
