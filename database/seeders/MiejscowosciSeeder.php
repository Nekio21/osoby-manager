<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Miejscowosc;

class MiejscowosciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $miejscowosci = ['Warszawa', 'Kraków', 'Gdańsk', 'Poznań', 'Wrocław'];

        foreach ($miejscowosci as $nazwa) {
            Miejscowosc::create(['nazwa' => $nazwa]);
        }
    }
}
