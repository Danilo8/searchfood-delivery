<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view CADASTRAR
     * --------------------------------------------------------------------------
     */
    public function cadastrar()
    {
        if (view()->exists('restaurant.cadastrar'))
        {
            return view('restaurant.cadastrar');
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
