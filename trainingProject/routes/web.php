<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/teste', function () {
    return ('<h1>Teste</h1>');
});

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produto/{id?}', function ($id = null) { // $id = null ==> null como default
    return view('product', ['id' => $id]);           // {id?} o ? torna o parametro opcional
});
