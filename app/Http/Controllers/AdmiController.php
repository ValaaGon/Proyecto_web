<?php

namespace App\Http\Controllers;
use App\Models\PerfilModel;
use App\Models\CuentaModel;
use Illuminate\Support\Facades\Validator;



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

    public function edit($user)
{
    $usuario = CuentaModel::find($user);
    return view('Administrador.cuentas.cuentasEdit', compact('usuario'));
}

public function update(Request $request, $user)
{
    $validator = Validator::make($request->all(), [
        'nombre' => 'required|alpha|min:2|max:20',
        'apellido' => 'required|alpha|min:2|max:20',
    ], [
            'nombre.required' => 'Indique nombre',
            'nombre.min' => 'El nombre debe tener entre 2 y 20 caracteres',
            'nombre.max' => 'El nombre debe tener entre 2 y 20 caracteres',
            'nombre.alpha'=>'Ingrese un nombre valido',
            'apellido.required' => 'Indique apellido',
            'apellido.min' => 'El apellido debe tener entre 2 y 20 caracteres',
            'apellido.max' => 'El apellido debe tener entre 2 y 20 caracteres',
            'apellido.alpha'=>'Ingrese un apellido valido',
       
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $usuario = CuentaModel::find($user);
    $usuario->nombre = $request->nombre;
    $usuario->apellido = $request->apellido;
    $usuario->save();
    
    return redirect()->route('cuentas.mostrar')->with('success', 'Usuario actualizado exitosamente');
}

   
    

    
    
}