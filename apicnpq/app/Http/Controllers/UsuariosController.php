<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller{   
    //listagem dos usuários
    public function index(){
        $users = [
            'Antônio',
            'Júlia',
            'Vilker'
        ];
        
        //compact('users'); //cria um array da variável que tem esse nome
        //return view('listarUsuarios', compact('users'));

        return view('usuarios.index')->with('users', $users);
    }

    public function create(){
        return view('usuarios.create');
    }
}
