<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PhoneController::class, 'index'])->name('phones.index');
Route::get('/show/{id}', [PhoneController::class, 'show'])->name('phones.show');
Route::get('/sale', [PhoneController::class, 'sale'])->name('phones.sale');
Route::get('/delivery', [PhoneController::class, 'delivery'])->name('phones.delivery');
Route::get('/contacts', [PhoneController::class, 'contacts'])->name('phones.contacts');
Route::get('/search', [PhoneController::class, 'search'])->name('phones.search');
Route::get('/basket', [PhoneController::class, 'basket'])->name('phones.basket');
Route::get('/result', [PhoneController::class, 'result'])->name('phones.result');
//Route::post('/result', [PhoneController::class, 'result'])->name('phones.result');*/
Route::get('/buy/{id}', [PhoneController::class, 'buy'])->name('phones.buy');
Route::get('/warranty', [PhoneController::class, 'warranty'])->name('phones.warranty');
Route::get('/return', [PhoneController::class, 'returnPhone'])->name('phones.return');
Route::get('/faq', [PhoneController::class, 'faq'])->name('phones.faq');
Route::get('/user-agreement', [PhoneController::class, 'userAgreement'])->name('phones.user-agreement');
Route::get('/confidentiality', [PhoneController::class, 'confidentiality'])->name('phones.confidentiality');
