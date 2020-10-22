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

// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get('/', function () {

    $data = config('pasta');
    $paste = [];

    foreach ($data as $key => $prodotto) {
        $prodotto['id'] = $key;
        $paste[$prodotto['tipo']][] = $prodotto;
    }

    return view('index', ['paste' => $paste]);

})->name('home');


Route::get('/prodotti', function () {

    $data = config('pasta');
    $paste = [];

    foreach ($data as $key => $prodotto) {
        $prodotto['id'] = $key;
        $paste[$prodotto['tipo']][] = $prodotto;
    }

    return view('prodotti', ['paste' => $paste]);
})->name('prodotti');



Route::get('/prodotti/show/{id}', function ($id) {

    $data = config("pasta");
 
    if($data[$id] == NULL) {
        abort(404);
    }

    $length = count($data);

    return view('prodotto', ['prodotto' => $data[$id], 'id' => $id, 'length' => $length]);
})->name('dettaglio-prodotto')->where('id', '[0-9]+');


Route::get('/news', function () {
    return view('news');
})->name('news');