<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Seeder;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = new cliente();
        $cliente->telefono='3133734481';
        $cliente->nombre='Kevin Sanchez';
        $cliente->nip="1007228390";
        $cliente->save();
    }
}
