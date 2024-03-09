<?php
use App\Http\Controllers\public\AcueilController;
use App\Http\Controllers\public\EvenementController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AcueilController::class,'index'])->name('accueil');
Route::get('/evenements', [EvenementController::class,'index'])->name('public.evenements');

