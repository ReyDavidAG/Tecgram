<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Str;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $nombreImagen = Str:uuid().".".$imagen->extension();

        $ImagenServidor = Image::make($imagen);
        $ImagenServidor->fit(500,500);

        $imagenRuta = public_path('uploads').'/'.$nombreImagen;
        
        $ImagenServidor->save($imagenRuta);
        return response()->json(['imagen'=>
        $nombreImagen]);
        
    }
}
