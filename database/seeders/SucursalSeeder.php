<?php

namespace Database\Seeders;

use App\Models\empresa;
use App\Models\sucursal;
use App\Models\User;
use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i = 0; $i < 16; $i++) {
            $userp = new User();
            $userp->name = "Sucursal " . User::where('id', 1)->value("name");
            $userp->email = "Sucursal" .($i+1) . "@Imperio.com";
            $userp->password = bcrypt('password');
            $userp->rol = 2;
            $userp->save();
            sucursal::factory(1)->create([
                "empresa" => empresa::where('id', 1)->first(),
                "usuario" => $userp
            ]);
        }
    }
}
