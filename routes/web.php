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

Route::get('/', function () {
    return view('home');
})->name('pagina-home');



Route::get('/products', function () {
    $pasta = config('pasta');

    $pasta_lunga = array_filter($pasta, function($element) {
        return $element['tipo'] == 'lunga';
    });

    $pasta_corta = array_filter($pasta, function($element) {
        return $element['tipo'] == 'corta';
    });

    $pasta_cortissima = array_filter($pasta, function($element) {
        return $element['tipo'] == 'cortissima';
    });

    $data = [
        'tipi' => [
            'Le Lunghe' => $pasta_lunga,
            'Le Corte' => $pasta_corta,
            'Le Cortissime' => $pasta_cortissima
        ]
    ];
    return view('products', $data);
})->name('pagina-prodotti');


Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');

    if(is_numeric($id) && $id >= 0 && $id < count($pasta)) {
        $prodotti = $pasta[$id];

        $data = [
            'dettagli' => $prodotti
        ];
        
        return view('dettagli', $data);
    } else {
        abort('404');
    }

})->name('pagina-dettagli');


Route::get('/notizie', function () {
    return view('news');
})->name('pagina-notizie');