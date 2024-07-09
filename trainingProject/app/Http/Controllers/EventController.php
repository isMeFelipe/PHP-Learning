<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index()
    {
        $nome = "Felipe Moura";
        $idade = 21;
        $profissao = "programação";

        $arr = [1, 2, 3, 4, 5];
        $nomes = ["Felipe", "Joao", "Zé Filho", "George", "MAario", "Carlos", "Leo"];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }



    public function create()
    {
        return view('events.create');
    }
}
