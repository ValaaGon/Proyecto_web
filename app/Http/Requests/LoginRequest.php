<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            'user' => 'required|string|min:2|max:20',
            'password' => 'bail|required|string|min:6|max:100',
        ];
    }


    public function messages():array
    {
        return [
            'user.required' => 'Indique nombre de usuario',
            'user.min' => 'El nombre de usuario debe tener entre 2 y 20 caracteres',
            'user.max' => 'El nombre de usuario debe tener entre 2 y 20 caracteres',
            'user.string' => 'Ingrese un nombre valido',
            'password.required' => 'Indique contraseña del usuario',
            'password.min' => 'La contraseña debe tener entre 6 y 20 caracteres',
            'password.max' => 'La contraseña debe tener entre 6 y 20 caracteres',
            'password.string' => 'La contraseña debe tener solo letras',
           
            
        ];
    }

    

  
}
