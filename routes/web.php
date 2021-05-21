<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PortfolioController;

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;


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
/*=======
Route::get('/', function () {
    return view('index');
});*/
/*Route::get('dashboard', function () {
    return view('dashboard/dashboard');
});*/

Route::get('portfolio', [PortfolioController::class,'index']);
Route::post('add_portfolio', [PortfolioController::class,'addPortfolio']);
Route::get('edit_portfolio/{id}',[PortfolioController::class,'getPortfolioById']);
Route::post('update_portfolio/{id}', [PortfolioController::class,'updatePortfolio']);
Route::delete('deleteportfolio/{id}',[PortfolioController::class,'deletePortfolio']);



Route::get('team', [TeamController::class,'index']);
Route::post('add_team', [TeamController::class,'addTeam']);
Route::get('edit_team/{id}',[TeamController::class,'getTeamById']);
Route::post('update_team/{id}', [TeamController::class,'updateTeam']);
Route::delete('deleteteam/{id}',[TeamController::class,'deleteTeam']);



Route::get('testimonial', [TestimonialController::class,'index']);
Route::post('add_testimonial', [TestimonialController::class,'addTestimonial']);
Route::get('edit_testimonial/{id}',[TestimonialController::class,'getTestimonialById']);
Route::post('update_testimonial/{id}', [TestimonialController::class,'updateTestimonial']);
Route::delete('deletetestimonial/{id}',[TestimonialController::class,'deleteTestimonial']);



Route::get('service', [ServiceController::class,'index']);
Route::post('add_service', [ServiceController::class,'addService']);
Route::get('edit_service/{id}',[ServiceController::class,'getServiceById']);
Route::post('update_service/{id}', [ServiceController::class,'updateService']);
Route::delete('deleteservice/{id}',[ServiceController::class,'deleteService']);

// Route::get('portfolio', function () {
//     return view('dashboard/portfolio');
// });

Route::get('details', function () {
    return view('portfolio-details');
});
