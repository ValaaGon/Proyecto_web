<?php

namespace App\Http\Controllers;

use App\Models\ImagenModel;
use App\Models\CuentaModel;
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

        $file = $request->file('file');
        $nombreArchivo = $file->getClientOriginalName();
        $extencion = $file->getClientOriginalExtension();
        $ruta = $file->store('ImagSubida', ['disk' => 'public']);

        $data['file'] = $ruta;

        $imagenModel = new ImagenModel();
        $imagenModel->titulo = $request->input('titulo');
        $imagenModel->archivo = $nombreArchivo;
        $imagenModel->cuenta_user = Auth::user()->user;
        $imagenModel->baneada = false;
        $imagenModel->motivo_ban = null;
        $imagenModel->save();

        return redirect('/gestionp');
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


    public function verFotos()
    {
        $imagenes = ImagenModel::all();
        
        return view('Artista.Galeria', compact('imagenes'));
    }
    
    public function GestionP(){
        $user = auth()->user();


    $imagenes = $user->imagenes;

    return view('Artista.Gestion', ['imagenes' => $imagenes]);
    }

    public function borrarFoto($imagenId) {
        $foto = ImagenModel::find($imagenId);
    
        if ($foto) {
            Storage::delete('storage/ImagSubida/' . $foto->archivo);
            $foto->delete();
        }
    
        return back();
    }

   
}
