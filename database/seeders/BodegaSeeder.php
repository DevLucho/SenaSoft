<?php

namespace Database\Seeders;

use App\Models\bodega;
use Illuminate\Database\Seeder;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bodega = new bodega();
        $bodega->empresa = 1;
        $bodega->save();
    }
}
