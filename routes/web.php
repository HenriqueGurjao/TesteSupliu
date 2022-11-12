<?php

use App\Http\Controllers\{
    PostController,
    FaixaController
};
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
// filtrar

Route::post('/filtrarF',[FaixaController::class,'FiltrarFaixa'])->name('Faixa.filtra');
Route::post('/filtrarA',[PostController::class,'FiltrarAlbum'])->name('Album.filtra');



//rotas de faixa


Route::get('/criar/faixa',[FaixaController::class,'criarFaixa'])->name('criar.faixa');
Route::post('/criarF',[FaixaController::class,'StoreFaixa'])->name('Faixa.store');


//rota de albuns


Route::post('/criarA',[PostController::class,'StoreAlbum'])->name('album.store');
Route::get('/criar/album',[PostController::class,'criarAlbum'])->name('criar.album');


//rota da view principal 

Route::get('/home',[PostController::class,'index'])->name('index');
 
Route::get('/welcome',[PostController::class,'welcome'] );
