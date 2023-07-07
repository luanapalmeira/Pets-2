<?php

namespace App\Http\Controllers;

use App\Models\Adocao;
use Illuminate\Http\Request;

class AdocaoController extends Controller
{
    function store(Request $request) 
    {
        /**
         * Cria um novo registro de adoção
         * 
         * @param Request $request
         * @return Adocao
         */
        $request->validate([
           "email" => ['required', 'email'],
           "valor" => ['required', 'numeric', 'between:10,100'],
           "pet_id" => ['required', 'int', 'exists:pets,id']
        ]);

        $dadosDaAdocao = ($request->all());

        return Adocao::create($dadosDaAdocao);
    }
}
