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

// Route::get('/', function () {
//     return view('welcome');
// });
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

Route::resource('herois', heroisController::class); 