<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\empresa;

class bodega extends Model
{
    use HasFactory;
    
    protected $table = 'Bodegas';

    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'empresa');

    }
}
