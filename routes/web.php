<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [Controller::class,'getIndex']);
/*route for sending email on form submission......*/
Route::post('add-contactform',[ContactFormController::class,'addContactform'])->name('contactform.add');
Route::get('contactform_detail',[ContactFormController::class,'index']);
Route::get('contactforms/{id}',[ContactFormController::class,'getContactformById']);
/*for editing dashbord googlemap*/
Route::get('contacts/{id}',[ContactController::class,'getContactById']);
Route::put('updateContact',[ContactController::class,'updateContact'])->name('contact.update');


Route::post('add_portfolio', [PortfolioController::class,'addPortfolio']);
Route::get('portfolio', [PortfolioController::class,'index']);

Route::get('dashboard', [Controller::class,'getDashboard']);
/*Route::get('test', function () {
    return view('dashboard/testing');
});*/
// Route::get('portfolio', function () {
//     return view('dashboard/portfolio');
// });

Route::get('details', function () {
    return view('portfolio-details');
});
