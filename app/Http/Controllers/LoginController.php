<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\CuentaModel;

class LoginController extends Controller
{
    public function show()
    {
        if(Auth::check()){
            return redirect('/home');

        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('user', 'password');

        if (!Auth::attempt($credentials)) {
            return redirect()->to('/login')->withErrors('Nombre de usuario o contraseña incorrrectas');
        }

        return $this->authenticated($request, Auth::user());
    }

    public function authenticated(LoginRequest $request, CuentaModel $CuentaModel)
    {
        return redirect('/home');
    }
}
