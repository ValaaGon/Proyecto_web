<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilModel extends Model
{
    use HasFactory;

    protected $table = 'Perfiles';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];


    public $incrementing = false;

    public function imagenes():HasMany{
        return $this->hasMany(Cuenta::class, 'perfil_id');
    }

}
