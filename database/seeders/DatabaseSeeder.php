<?php

namespace Database\Seeders;

use App\Models\bodega;
use App\Models\empresa;
use App\Models\Rol;
use App\Models\sucursal;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(BodegaSeeder::class);
        $this->call(SucursalSeeder::class);
 
    }
}
