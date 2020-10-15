<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->nombre_rol = "Empresa";
        $rol->save();

        $rol = new Rol();
        $rol->nombre_rol = "Sucursal";
        $rol->save();
    }
}
