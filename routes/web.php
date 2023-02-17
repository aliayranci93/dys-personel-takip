<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personel\PersonelBilgiController;
use App\Http\Controllers\KullaniciController;

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

Route::get('/', [KullaniciController::class, 'index'])->name('login');


Route::get('dashboard', [KullaniciController::class, 'dashboard']); 
Route::get('login', [KullaniciController::class, 'index'])->name('login');
Route::post('custom-login', [KullaniciController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [KullaniciController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [KullaniciController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [KullaniciController::class, 'signOut'])->name('signout');

Route::get('/personel-listesi', [PersonelBilgiController::class, 'index'])->name('personel-list');
Route::get('/personel-kaydet', [PersonelBilgiController::class, 'create'])->name('personel-kaydet-ekran');
Route::post('/personel-kaydet', [PersonelBilgiController::class, 'store'])->name('personel-kaydet');
Route::get('/personel-duzenle/{id}', [PersonelBilgiController::class, 'edit'])->name('personel-duzenle-ekran');
Route::post('/personel-duzenle', [PersonelBilgiController::class, 'update'])->name('personel-duzenle');
Route::delete('/personel-sil/{id}', [PersonelBilgiController::class, 'destroy'])->name('personel-sil');