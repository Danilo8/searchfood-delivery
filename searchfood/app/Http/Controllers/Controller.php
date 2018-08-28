<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view INDEX
     * --------------------------------------------------------------------------
     */
    public function index()
    {
        if (view()->exists('index'))
        {
            return view('index');
        } else {
            echo "Página não encontrada!";
        }
    }

    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view SOBRE
     * --------------------------------------------------------------------------
     */
    public function sobre()
    {
        if (view()->exists('sobre'))
        {
            return view('sobre');
        } else {
            echo "Página não encontrada!";
        }
    }

    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view TERMOS
     * --------------------------------------------------------------------------
     */
    public function termos()
    {
        if (view()->exists('termos'))
        {
            return view('termos');
        } else {
            echo "Página não encontrada!";
        }
    }

    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view PRIVACIDADE
     * --------------------------------------------------------------------------
     */
    public function privacidade()
    {
       if (view()->exists('privacidade'))
        {
            return view('privacidade');
        } else {
            echo "Página não encontrada!";
        }
    }

    /**
     * --------------------------------------------------------------------------
     * Função que retorna a view CONTATO
     * --------------------------------------------------------------------------
     */
    public function contato()
    {
        if (view()->exists('contato'))
        {
            return view('contato');
        } else {
            echo "Página não encontrada!";
        }
    }
}
