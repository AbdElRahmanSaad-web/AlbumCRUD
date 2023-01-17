<?php

use App\Http\Controllers\AlbumController;
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
    return view('album.layouts.app');
});


Route::resource('albums', AlbumController::class);

Route::post('saveImages/{id}', [AlbumController::class, 'saveImages'])->name('uploadImages');
Route::get('imagePage/{id}', [AlbumController::class, 'ImagesPage'])->name('image_page');
Route::get('deleteOrMove/{id}', [AlbumController::class, 'deleteOrMove'])->name('delete_or_move');
Route::delete('deleteAll/{id}', [AlbumController::class, 'deleteAll'])->name('delete_all');
Route::post('moveAll/{id}', [AlbumController::class, 'moveAll'])->name('move_all');
