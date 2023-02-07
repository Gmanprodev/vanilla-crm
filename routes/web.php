<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [AuthController::class, 'show'])
    ->name('login');

Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('authenticate');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');;

Route::middleware('auth')->group(function () {
    Route::get('/contacts', [ContactController::class, 'index'])
        ->name('contacts');;

    Route::get('/contacts/create', [ContactController::class, 'create'])
        ->name('contacts.create');

    Route::post('/contacts/create', [ContactController::class, 'postCreate'])
        ->name('contacts.post.create');;

    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])
        ->name('contacts.edit');

    Route::post('/contacts/{id}/edit', [ContactController::class, 'postEdit'])
        ->name('contacts.post.edit');
});
