<?php

use Illuminate\Routing\Events\Routing;
use Illuminate\Support\Facades\Route;
use App\Models\Pemain;
use App\Http\Controllers\PemainController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pemain', [PemainController::class, 'index']);
Route::get('/pemain/show/{id}', [PemainController::class, 'show'])->name('pemain.show');