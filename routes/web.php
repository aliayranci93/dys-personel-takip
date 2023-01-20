<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personel\PersonelBilgiController;

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
    return view('welcome');
});

Route::get('/personel-kaydet', [PersonelBilgiController::class, 'create'])->name('personel-kaydet-ekran');
Route::post('/personel-kaydet', [PersonelBilgiController::class, 'store'])->name('personel-kaydet');