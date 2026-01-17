<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Firma;

class FirmySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        $firmy = ['Żabka', 'Biedronka', 'Lidl'];

        foreach ($firmy as $nazwa) {
            Firma::create(['nazwa' => $nazwa]);
        }
    }
}
