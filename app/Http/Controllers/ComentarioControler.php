<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioControler extends Controller
{
    public function create(Request $request)
    {
        $comentario = new Comentario;

        $comentario->id_usuario = $request->id_usuario;
        $comentario->id_postagem = $request->id_postagem;
        $comentario->comentario = $request->comentario;

        $comentario->save();

        $redirect = '/postagem/' . $comentario->id_postagem;

        return redirect($redirect)->with('success', 'Comentario salvo com sucesso');
    }
}
