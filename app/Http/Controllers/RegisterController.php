<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\CuentaModel;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            $perfilId = Auth::user()->perfil_id;

            if ($perfilId == 2) {
                return redirect('/home');
            }
        }

        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $cuenta = CuentaModel::create($request ->validated());
        return redirect('/login')->with('success', 'Account created successfully'); 

    }
}
