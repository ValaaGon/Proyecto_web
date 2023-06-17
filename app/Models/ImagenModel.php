<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenModel extends Model
{
    use HasFactory;

    protected $table = 'Imagenes';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo','archivo','baneada','motivo_ban'];

    public $incrementing = false;

    public function cuentas()
    {
        return $this->belongsTo(Cuenta::class, 'cuenta_id');
    }





    
    


}
