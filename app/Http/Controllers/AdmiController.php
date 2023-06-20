<?php

namespace App\Http\Controllers;
use App\Models\PerfilModel;
use App\Models\CuentaModel;


use Illuminate\Http\Request;

class AdmiController extends Controller
{
    public function indexPerfiles(){
        $perfiles = PerfilModel::all();
        return view('Administrador.perfiles', compact('perfiles'));
    }

   

    public function showCuentas(){
        $cuentas = CuentaModel::all();
        return view('Administrador.cuentas.cuentasMostrar', compact('cuentas'));

    }


    public function destroy(CuentaModel $cuenta){
        $cuenta ->delete();
        return redirect('Administrador.perfiles');

    }
}