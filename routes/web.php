<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutIconController;
use App\Http\Controllers\AboutVideoController;
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
    return view('index');
});
Route::get('dashboard', function () {
    return view('dashboard/dashboard');
});

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


Route::get('aboutIcon', [AboutIconController::class,'index']);
Route::post('add_aboutIcon', [AboutIconController::class,'addAboutIcon']);
Route::get('edit_aboutIcon/{id}',[AboutIconController::class,'getAboutIconById']);
Route::post('update_aboutIcon/{id}', [AboutIconController::class,'updateAboutIcon']);
Route::delete('deleteaboutIcon/{id}',[AboutIconController::class,'deleteAboutIcon']);



Route::get('aboutVideo', [AboutVideoController::class,'index']);
Route::get('edit_aboutVideo/{id}',[AboutVideoController::class,'getAboutVideoById']);
Route::post('update_aboutVideo/{id}', [AboutVideoController::class,'updateAboutVideo']);
Route::get('videoDescriptions/{id}',[AboutVideoController::class,'getAboutDescriptionById']);
// Route::get('portfolio', function () {
//     return view('dashboard/portfolio');
// });

Route::get('details', function () {
    return view('portfolio-details');
});
