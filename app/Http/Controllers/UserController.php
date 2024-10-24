<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Postagen;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('pages.userCreate');
    }

    public function store(Request $request)
    {
        $usuario = new User;

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->tipo_usuario = $request->tipo_usuario;
        $usuario->solicitacao = $request->solicitacao;
        $usuario->permissao = $request->permissao;

        //Image upload
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $requestImage = $request->foto;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/usuario'), $imageName);

            $usuario->foto = $imageName;
        }


        $usuario->save();

        // Redirecionar com mensagem de sucesso
        return redirect('/')->with('success', 'Postagem enviada com sucesso!');
    }

    public function visualizarLogin()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;

        $usuario = User::where('email', $email)->first();

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $redirect = '/login/' . $usuario->id;

            $request->session()->regenerate();

            return redirect()->intended($redirect);
        }

        return redirect('/login')->with('success', 'Usuario/Senha incorretas');
    }

    public function showUser(int $id)
    {
        $usuario = User::findOrFail($id);

        $postagens = Postagen::where('id_usuario', $id)->get();

        $quantidadePostagens = $postagens->count();

        return view(
            'pages.showUsuario',
            [
                'postagens' => $postagens,
                'usuario' => $usuario,
                'quanridadePost' => $quantidadePostagens
            ]
        );
    }
}
