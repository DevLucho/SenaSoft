<?php

namespace Database\Seeders;

use App\Models\bodega;
use App\Models\empresa;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $empresa = new empresa();
        $empresa->directorGeneral = "Don Chancho";
        $empresa->nit = "112212-5";
        $empresa->direccion = "Aquí";
        $empresa->telefono = "7154567";
        $empresa->logo = "iconPig.png";
        $empresa->usuario = 1;
        $empresa->save();
        


    }
}
