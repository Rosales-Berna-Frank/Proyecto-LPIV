<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    public function guardar_cur(Request $request){
        $curso = new curso();
        $curso->nombre = $request->nombre;
        $curso->num_horas = $request->num_horas;
        $curso->capitulos = $request->capitulos;
        $curso->descripcion = $request->descripcion;
        $curso->id_usuario = Auth::id();
        $curso->save();
        echo "Direccion Guardada";
    }
}
