<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Restaurant;
use app\Menu;
use app\Category;

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
     * Função que cadastra o Restaurante no Banco de Dados
     * --------------------------------------------------------------------------
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * --------------------------------------------------------------------------
     */
    public function cadastrar(Request $request)
    {
        Restaurant::cadastro($request->all());
        return redirect('/')->with(['' => '']);
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
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view DASHBOARD
     * --------------------------------------------------------------------------
     */
    public function dashboard()
    {
        if (view()->exists('restaurant.dashboard.dashboard'))
        {
            return view('restaurant.dashboard.dashboard');
        } else {
            echo "Página não encontrada!";
        }
    }
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view PEDIDOS
     * --------------------------------------------------------------------------
     */
    public function pedidos()
    {
        if (view()->exists('restaurant.dashboard.pedidos'))
        {
            return view('restaurant.dashboard.pedidos');
        } else {
            echo "Página não encontrada!";
        }
    }
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view CARDAPIO
     * --------------------------------------------------------------------------
     */
    public function cardapio()
    {
        if (view()->exists('restaurant.dashboard.cardapio'))
        {
            return view('restaurant.dashboard.cardapio');
        } else {
            echo "Página não encontrada!";
        }
    }
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view ADMINISTRADOR
     * --------------------------------------------------------------------------
     */
    public function administrador()
    {
        if (view()->exists('restaurant.dashboard.administrador'))
        {
            return view('restaurant.dashboard.administrador');
        } else {
            echo "Página não encontrada!";
        }
    }
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view RELATORIOS
     * --------------------------------------------------------------------------
     */
    public function relatorios()
    {
        if (view()->exists('restaurant.dashboard.relatorios'))
        {
            return view('restaurant.dashboard.relatorios');
        } else {
            echo "Página não encontrada!";
        }
    }
}
