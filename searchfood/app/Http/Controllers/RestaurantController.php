<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view CADASTRO
     * --------------------------------------------------------------------------
     */
    public function cadastro()
    {
        if (view()->exists('restaurant.cadastro'))
        {
            return view('restaurant.cadastro');
        } else {
            echo "Página não encontrada!";
        }
    }

    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view LOGIN
     * --------------------------------------------------------------------------
     */
    public function login()
    {
        if (view()->exists('restaurant.login'))
        {
            return view('restaurant.login');
        } else {
            echo "Página não encontrada!";
        }
    }
}
