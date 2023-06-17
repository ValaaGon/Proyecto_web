<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaModel extends Model
{
    use HasFactory;
    protected $table = 'Cuentas';
    protected $primaryKey = 'id';
    protected $fillable = 'nombre';



    public $incrementing = false;

    public function perfiles():HasMany{
        return $this->belongsTo(Perfil::class, 'perfil_id');
    }

    public function imagenes():HasMany{
        return $this->hasMany(Imagen::class, 'cuenta_id');
    }




}
