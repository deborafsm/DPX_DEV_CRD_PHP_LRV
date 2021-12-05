<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Essas variaveis podem ser renderizadas dentro do blade através de chaves e o nome da várivel {{$nome}}
        $nome = "Debora F";
        $idade = "0b11010";
        $arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $frutas = ["Banana", "morango", "ameixa", "cereja", "caju"];
        $nomes = ["Débora", "Débora F"];
        // retorna a view e um array com os dados [nome, idade, profissão]
        return view(
            'events.create',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => "Analista de Sistemas",
                'frutas' => $frutas,
                'nomes' => $nomes
            ]


        );
    }

    public function create()
    {
        return view('events.create');
    }
}
