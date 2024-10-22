<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function visualizarLogin(){
        return view('pages.login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return redirect('/')->with('success', 'Login efetuado com sucesso!');
        
    }


}
