<?php

namespace App\Http\Controllers;

use App\Models\ImagenModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class ArtiController extends Controller
{
    public function show()
    {
        return view('Artista.subirFoto');
    }

    public function subirImagen(Request $request)
    {
        $request->validate([
            'file' => 'required|image',
            'titulo' => 'required|string|max:20',
        ], $this->messages());

        $imagen = $request->file('file');
        $nombreArchivo = $imagen->getClientOriginalName();

        Storage::putFileAs('public/imagenes', $imagen, $nombreArchivo);

        $imagenModel = new ImagenModel();
        $imagenModel->titulo = $request->input('titulo');
        $imagenModel->archivo = $nombreArchivo;
        $imagenModel->cuenta_user = Auth::user()->user;
        $imagenModel->baneada = false;
        $imagenModel->motivo_ban = null;
        $imagenModel->save();

        return redirect()->back()->with('success', 'Imagen subida correctamente');
    }

    public function messages(): array
    {
        return [
            'file.required' => 'Imagen requerida',
            'file.image' => 'Suba un archivo válido',
            'titulo.required' => 'Ingrese un título',
            'titulo.max' => 'El título debe tener como máximo 20 caracteres',
        ];
    }


    public function verFotos(){
        return view('Artista.Galeria');

    }

    public function GestionP(){
        $user = auth()->user();


    $imagenes = $user->imagenes;

    return view('Artista.Gestion', ['imagenes' => $imagenes]);
    }
}
