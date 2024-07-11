<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function about(){
        $nome = "Felipe";
        $profissao = "Desenvolvedor";
        $descricao = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, accusantium dolore, est tenetur laborum, nobis laudantium quaerat saepe ut vero harum magni vitae aperiam sapiente quod quibusdam ex? Commodi, iusto?";

        return view('about', [
            'nome' => $nome,
            'profissao' => $profissao,
            'descricao' => $descricao
        ]);
    }



}
?>