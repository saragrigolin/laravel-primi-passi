<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

// Bonus:
// Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()

Route::get('/', function () {
    $data = [
        'name' => 'Sara',
        'lastname' => 'Grigolin',
        'details' => [
            'occhi marroni', 'capelli castani', 'altezza 1.67m'
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('/contatti', function () {
    $data = [
        'contacts' => [
            'email' => 'sara.grigolin@gmail.com',
            'github' => 'github.com/saragrigolin',
            'telefono' => '0123456789'
        ]
        
    ];

    return view('contatti', $data);
})->name('contatti');

Route::get('/bio', function () {
    $data = [
        'bio' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rerum totam, eos distinctio non delectus? Dicta necessitatibus reiciendis impedit animi quae debitis quia eius nulla pariatur? Quos enim illum animi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rerum totam, eos distinctio non delectus? Dicta necessitatibus reiciendis impedit animi quae debitis quia eius nulla pariatur? Quos enim illum animi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima rerum totam, eos distinctio non delectus? Dicta necessitatibus reiciendis impedit animi quae debitis quia eius nulla pariatur? Quos enim illum animi.'
        
    ];

    return view('bio', $data);
})->name('bio');
