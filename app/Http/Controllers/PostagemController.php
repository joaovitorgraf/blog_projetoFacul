<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Postagen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostagemController extends Controller
{
    public function index()
    {
        $postagens = Postagen::orderBy('id', 'desc')->get();

        $user = User::whereIn('id', $postagens->pluck('id_usuario'))->get()->keyBy('id');

        return view('pages.home', ['postagens' => $postagens, 'usuario' => $user]);
    }

    public function readOne(int $id)
    {
        $postagem = Postagen::find($id);

        $user = User::whereIn('id', $postagem->pluck('id_usuario'))->get()->keyBy('id');

        $comentarios = Comentario::where('id_postagem', $id)
            ->with('user')
            ->orderBy('id', 'desc')
            ->get();

        $idUsuarioLogado = Auth::id();

        return view('pages.postagemOne', [
            'postagem' => $postagem,
            'usuario' => $user,
            'comentarios' => $comentarios,
            'idUsuarioLogado' => $idUsuarioLogado
        ]);
    }

    public function create(int $id_usuario)
    {
        $usuario = User::find($id_usuario)->first();

        return view('pages.postagemCreate', ['id_usuario' => $id_usuario]);
    }

    public function store(Request $request)
    {

        $postagem = new Postagen;

        $postagem->id_usuario = $request->id_usuario;
        $postagem->titulo = $request->titulo;
        $postagem->conteudo = $request->conteudo;
        $postagem->categoria = $request->categoria;

        //Image upload
        if ($request->hasFile('capa') && $request->file('capa')->isValid()) {
            $requestImage = $request->capa;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/capa'), $imageName);

            $postagem->capa = $imageName;
        }


        $postagem->save();

        $redirect = '/login/' . $postagem->id_usuario . '/postagem';

        return redirect($redirect)->with('success', 'Postagem enviada com sucesso!');
    }

    public function delete(int $id)
    {
        $postagem = Postagen::findOrFail($id);

        if ($postagem->capa) {

            $imagePath = public_path('img/capa/' . $postagem->capa);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $postagem->delete();

        return redirect()->back()->with('success', 'Postagem deletada com sucesso!');
    }

    public function editar(Request $request, $id)
    {

        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'categoria' => 'required|string|max:100',
            'capa' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Suporte a imagens
        ]);

        $postagem = Postagen::findOrFail($id);

        if ($request->hasFile('capa')) {
            $capaPath = $request->file('capa')->store('capas', 'public');
            $validated['capa'] = $capaPath;

            if ($postagem->capa) {
                Storage::disk('public')->delete($postagem->capa);
            }
        }

        $postagem->update($validated);

        return redirect()->route('visualizarEditar', $id)->with('success', 'Postagem atualizada com sucesso!');
    }

    public function visualizarEditar(int $id)
    {

        $postagem = Postagen::find($id);

        return view('pages.editarPostagem', ['postagem' => $postagem]);
    }
}
