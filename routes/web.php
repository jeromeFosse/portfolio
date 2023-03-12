<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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

Route::get('/',              [PortfolioController::class, 'index']);
Route::get('/home',          [PortfolioController::class, 'index']);
Route::get('/projets',       [PortfolioController::class, 'projets']);
Route::get('/formation',     [PortfolioController::class, 'formation']);
Route::get('/experience',    [PortfolioController::class, 'experience']);
Route::get('/contact',       [PortfolioController::class, 'contact']);
Route::post('/contact',      [PortfolioController::class, 'formContact']);