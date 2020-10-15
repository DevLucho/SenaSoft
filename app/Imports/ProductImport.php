<?php

namespace App\Imports;

use App\Models\Producto;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Producto([
            'nombre' => $row[0],
            'cantidadMinima' => $row[1],
            'costoUnitario' => $row[2]
        ]);
    }
}
