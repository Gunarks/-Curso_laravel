<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\MyFirstMiddleware;
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

Route::fallback(function () {
    // dd('Essa rota não existe');
});

// Route::resource('user', UsersController::class)->names([
//     'index' => 'user/index',
//     'show'  => 'user/show',
//     'edit'  => 'user/edit'
// ]);

// Route::prefix('user')->name('user/')
// ->controller(UsersController::class)
// ->group(function (){
//     Route::get('/', 'index')->name('index');
//     Route::get('/create', 'create')->name('create');
//     Route::post('/create', 'store')->name('store');
//     Route::get('/{user}', 'show')->withTrashed()
//     ->missing(function () {
//         return redirect()->route('user/index');
//     })
//     ->name('show');


//     Route::get('/edit/{id}', 'edit')->name('edit');
//     Route::put('edit/{id}', 'update')->name('update');
//     Route::delete('/delete/{id}', 'destroy')->name('destroy');
// });

// Route::resource('/user', UsersController::class)->middleware(['MyFirstMiddleware'])
// ->names([
//     'show'    => 'user/show',
//     'edit'    => 'user/edit',
//     'create'  => 'user/create',
//     'index'   => 'user/index',
//     'destroy' => 'user/destroy',
// ]);

Route::get('/user', [MoviesController::class, 'index'])->name('user/index');
Route::get('/user/create', [MoviesController::class, 'create'])->name('user/create');
Route::post('/user/create', [MoviesController::class, 'store'])->name('user/store');
Route::get('/user/edit/{id}', [MoviesController::class, 'edit'])->name('user/edit');
Route::put('/user/edit/{id}', [MoviesController::class, 'update'])->name(('user/update'));
Route::get('/user/show/{id}', [MoviesController::class, 'show'])->name('user/show');
Route::delete('/user/delete/{id}', [MoviesController::class, 'destroy'])->name('user/delete');

