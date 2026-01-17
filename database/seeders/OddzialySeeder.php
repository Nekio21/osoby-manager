<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OddzialFirmy;

class OddzialySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $oddzialy = [
            ['nazwa' => 'A113', 'firma_id' => 1],
            ['nazwa' => '300', 'firma_id' => 1],
            ['nazwa' => '111', 'firma_id' => 2],
            ['nazwa' => 'N22', 'firma_id' => 2],
            ['nazwa' => 'C111', 'firma_id' => 3],
        ];

        foreach ($oddzialy as $o) {
            OddzialFirmy::create($o);
        }
    }
}
