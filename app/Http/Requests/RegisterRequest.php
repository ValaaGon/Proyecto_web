<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user' => 'required|string|min:2|max:20|unique:cuentas,user',
            'password' => 'bail|required|string|min:6|max:100',
            'nombre' => 'required|string|min:2|max:20',
            'apellido' => 'required|string|min:2|max:20',
        ];
    }

    public function messages():array
    {
        return [
            'user.requiered' => 'Indique nombre de usuario',
            'user.min' => 'El nombre de usuario debe tener entre 2 y 20 caracteres',
            'user.max' => 'El nombre de usuario debe tener entre 2 y 20 caracteres',
            'user.string' => 'Ingrese un nombre valido',
            'nombre.required' => 'Indique nombre',
            'nombre.min' => 'El nombre debe tener entre 2 y 20 caracteres',
            'nombre.max' => 'El nombre debe tener entre 2 y 20 caracteres',
            'apellido.required' => 'Indique nombre',
            'apellido.min' => 'El nombre debe tener entre 2 y 20 caracteres',
            'apellido.max' => 'El nombre debe tener entre 2 y 20 caracteres',
            'password.required' => 'Indique contraseña del usuario',
            'password.min' => 'La contraseña debe tener entre 6 y 20 caracteres',
            'password.max' => 'La contraseña debe tener entre 6 y 20 caracteres',
            'password.string' => 'La contraseña debe tener solo letras',
           
            
        ];
    }
}
