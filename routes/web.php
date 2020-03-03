<?php

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
    return view('welcome');
})->name('home');

Route::get('/nome', function() {
    return 'Danilo';
});

Route::get('.env', function() {
    echo "
    <pre>
    # Config. BD
    BD_DRIVER=postgresql
    BD_HOST=bd.trap.io
    BD_PORT=666
    BD_USERNAME=root
    BD_PASSWORD=itisatrap
    </pre>
    ";
});

Route::get('/nome/{nome}/{id?}', function($nome, $id=0) {
    return 'Meu nome é '.$nome .' e meu id é '. $id;
})->where(['id' => '[0-9]+', 'nome' => '[A-Za-z]+']);

Route::get('cadastrarSala', function() {
    return view('cadastrarSala');
});

Route::post('sala/cadastrar', function(Illuminate\Http\Request $request) {
    return 'Cadastrou sala! Sala: '.$request->nome;
});

Route::get('erro', function() {
    abort(403, 'Deu erro!');
});

Route::get('/limpar-cache', function() {
    Artisan::call('cache:clear');
    return "Cache foi limpo!";
});

Route::get('/nova', function() {
    return view('home');
});

Route::get('salas', 'SalaController@index');
Route::get('salas/create', 'SalaController@create');
Route::post('salas','SalaController@store');
Route::get('salas/{sala}', 'SalaController@show');
Route::get('salas/edit', 'SalaController@edit');
