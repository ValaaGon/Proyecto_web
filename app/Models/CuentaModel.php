<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImagenModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;






class CuentaModel extends Authenticatable
{
    
    use SoftDeletes;
    protected $dates= ['deleted_at']; 

   

    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'Cuentas';
    protected $primaryKey = 'user';
    protected $fillable = ['user', 'password', 'nombre', 'apellido'];
    protected $hiddeen = 'password';
    protected $attributes = [
        'perfil_id' => 2, 
    ];



    public $incrementing = false;

    public function perfiles():hasMany{
        return $this->belongsTo(Perfil::class, 'perfil_id');
    }

    public function imagenes():hasMany{
        return $this->hasMany(ImagenModel::class, 'cuenta_user');
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);

    }




}
