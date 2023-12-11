<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\controllers\ArticleController;

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


Route::get('/', [ArticleController::class, 'blog']
);
Route::get('/statiq', function () {
    return view('article-details-statiq');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article-details');