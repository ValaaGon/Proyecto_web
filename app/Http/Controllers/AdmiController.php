<?php

namespace App\Http\Controllers;
use App\Models\PerfilModel;
use App\Models\CuentaModel;


use Illuminate\Http\Request;

class AdmiController extends Controller
{
    public function indexPerfiles()
{
    if (auth()->check() && auth()->user()->perfil_id == 1) {
        $perfiles = PerfilModel::all();
        return view('Administrador.perfiles', compact('perfiles'));
    } else {
        return redirect('/login');
    }
}


   

    public function showCuentas()
    {
        if (auth()->check() && auth()->user()->perfil_id == 1) {
            $cuentas = CuentaModel::all();
            return view('Administrador.cuentas.cuentasMostrar', compact('cuentas'));
        } else {
            return redirect('/login');
        }
    }
    


    public function destroy(CuentaModel $cuenta){

        if ($cuenta->perfil_id == 1) {
            return redirect()->route('cuentas.mostrar')->with('error', 'No se puede eliminar al administrador');
        }
        $cuenta->delete();
        return redirect()->route('cuentas.mostrar');
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