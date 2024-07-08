<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
