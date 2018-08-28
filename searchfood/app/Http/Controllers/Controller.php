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
     * Função que retorna a view INDEX
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Função que retorna a view SOBRE
     */
    public function sobre()
    {
        return view('sobre');
    }

    /**
     * Função que retorna a view TERMOS
     */
    public function termos()
    {
        return view('termos');
    }

    /**
     * Função que retorna a view PRIVACIDADE
     */
    public function privacidade()
    {
        return view('privacidade');
    }

    /**
     * Função que retorna a view CONTATO
     */
    public function contato()
    {
        return view('contato');
    }
}
