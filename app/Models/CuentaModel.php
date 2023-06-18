<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class CuentaModel extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'Cuentas';
    protected $primaryKey = 'user';
    protected $fillable = ['user', 'password', 'nombre', 'apellido'];
    protected $hiddeen = 'password';
    protected $attributes = [
        'perfil_id' => 2, 
    ];



    public $incrementing = false;

    public function perfiles():HasMany{
        return $this->belongsTo(Perfil::class, 'perfil_id');
    }

    public function imagenes():HasMany{
        return $this->hasMany(Imagen::class, 'cuenta_id');
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);

    }




}
