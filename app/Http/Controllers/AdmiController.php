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

        if ($cuenta->perfil_id == 1) {
            return redirect()->route('cuentas.mostrar')->with('error', 'No se puede eliminar al administrador');
        }
        $cuenta->delete();
        return redirect('cuentas.mostrar');
    }

    public function edit(CuentaModel $cuenta){
        return redirect()->route('cuentas.edit', ['cuenta' => $cuenta]);
    }
    

    public function update(Request $request, CuentaModel $cuenta)
    {
        $cuenta->nombre = $request->input('nombre');
        $cuenta->apellido = $request->input('apellido');
        $cuenta->user = $request->input('user');


        $cuenta->save();

        return redirect()->route('cuentas.mostrar')->with('success', 'Usuario actualizado exitosamente');
    }
    
}