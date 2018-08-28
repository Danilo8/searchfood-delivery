<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view ENTRAR-CADASTRAR
     * --------------------------------------------------------------------------
     */
    public function entrar()
    {
        if (view()->exists('user.entrar-cadastrar'))
        {
            return view('user.entrar-cadastrar');
        } else {
            echo "Página não encontrada!";
        }
    }
}
