<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteUri;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//?rotta get per arrivare al form di inserimento
 
Route::get('/reading/create', [ReadingController::class, 'create'])->name('reading.create');


//?rotta post per inserimento dei dati nel form database

Route::post('/reading/store', [ReadingController::class, 'store'])->name('reading.store');

//?rotta per vedere i titoli

Route::get('/reading/index', [ReadingController::class, 'index']);

//Tutte le rotte che fanno riferimento al libro
    Route::get('/reading/index', [ReadingController::class, 'index'])->name('reading.index');
    Route::prefix('album')->group(function(){

    Route::get('/index', [AlbumController::class,'index'])->name ('album.index');
    Route::get('/create', [AlbumController::class,'create'])->name ('album.create');
    Route::post('/store', [AlbumController::class,'store'])->name ('album.store');
    Route::get('/show/{album}', [AlbumController::class, 'show'])->name ('album.show');
});