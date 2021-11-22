<?php

use App\Http\Controllers\heroisController;
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
    // Essas variaveis podem ser renderizadas dentro do blade através de chaves e o nome da várivel {{$nome}}
    $nome = "Debora F";
    $idade = "0b11010";
    $arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $frutas = ["Banana", "morango", "ameixa", "cereja", "caju"];
    $nomes = ["Débora", "Débora F"];
    // retorna a view e um array com os dados [nome, idade, profissão]
    return view(
        'welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Analista de Sistemas",
            'frutas' => $frutas,
            'nomes' => $nomes
        ]


    );
});
Route::get('/show/{id}', function($id){
    return view('showId', ['id' => $id]);
});
// Chamamando view através do controler 
// @ -> indicação index -> metodo
// Route::get('/', 'heroisController@index');
// Route::get('/', [heroisController::class, 'index']);
// Route::get('/create', [heroisController::class, 'create']);
// Route::get('/store', [heroisController::class, 'store']);
// Route::get('/show', [heroisController::class, 'show']);
// Route::get('/edit', [heroisController::class, 'edit']);
// Route::get('/update', [heroisController::class, 'update']);
// Route::get('/delete', [heroisController::class, 'destroy']);
// Route::get('/', function() {
//     return view('herois');
// });

// Route::get('/adicionar_herois', function() {
//     return View('addHerois');
// });

// Route::resource('herois', heroisController::class); 