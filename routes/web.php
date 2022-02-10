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

Route::get('/', function () {
    $data = [
        'name' => 'Sara',
        'lastname' => 'Grigolin',
        'details' => [
            'occhi marroni', 'capelli castani', 'altezza 1.67m'
        ]
    ];

    return view('home', $data);
});
