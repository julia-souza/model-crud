<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller{   
    //listagem dos usuários
    public function index(){
        $users =  \DB::select('SELECT * FROM usercnpq;');
        // dd($users);
        
        //compact('users'); //cria um array da variável que tem esse nome
        //return view('listarUsuarios', compact('users'));

        return view('usuarios.index')->with('users', $users);
    }

    public function create(){
        return view('usuarios.create');
    }

    //insert no banco | DB Facade
    public function store(Request $request){
        $nomeUsuario = $request->input('user');
        $senhaUsuario = $request->input('password');
       
        if(\DB::insert('INSERT INTO usercnpq (nome,senha) VALUES (?,?)', [$nomeUsuario,$senhaUsuario])){
            return "Usuário cadastrado com sucesso";
        }else{
            return "Erro ao cadastrar";
        }
    }
}
