<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioImageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceTechController;
use App\Http\Controllers\AboutIconController;
use App\Http\Controllers\AboutVideoController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectReqController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\PartnersController;
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
Route::get('command', function () {
    Artisan::call('key:generate');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    dd("Done");
});



Route::get('/', [Controller::class,'getIndex']);
Route::get('portfolio_detail/{id}', [Controller::class,'getPortfolioIndex']);
Route::post('customlogin', [CustomLoginController::class,'authenticate']);
// Route::get('login', [Controller::class,'getLogin']);
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
// Route::get('login', [Controller::class,'login']);
// Route::get('login', function () {
//     return view('auth/login');
// });

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('dashboard', function () {
//     return view('dashboard/dashboard');
// });

Route::get('portfolio', [PortfolioController::class,'index']);
Route::post('add_portfolio', [PortfolioController::class,'addPortfolio']);
Route::get('edit_portfolio/{id}',[PortfolioController::class,'getPortfolioById']);
Route::post('update_portfolio/{id}', [PortfolioController::class,'updatePortfolio']);
Route::delete('deleteportfolio/{id}',[PortfolioController::class,'deletePortfolio']);



Route::post('update_portfolioImg', [PortfolioImageController::class,'updatePortfolioImg']);
Route::get('edit_portfolioImg/{id}',[PortfolioImageController::class,'getPortfolioImgById']);
Route::delete('deleteportfolioimg/{id}',[PortfolioImageController::class,'deletePortfolioImg']);

Route::get('team', [TeamController::class,'index']);
Route::post('add_team', [TeamController::class,'addTeam']);
Route::get('edit_team/{id}',[TeamController::class,'getTeamById']);
Route::post('update_team/{id}', [TeamController::class,'updateTeam']);
Route::delete('deleteteam/{id}',[TeamController::class,'deleteTeam']);

Route::get('our_partners', [PartnersController::class,'index']);
Route::post('add_partner', [PartnersController::class,'addPartner']);
Route::get('edit_partner/{id}',[PartnersController::class,'getPartnerById']);
Route::post('update_partner/{id}', [PartnersController::class,'updatePartner']);
Route::delete('deletepartner/{id}',[PartnersController::class,'deletePartner']);



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

Route::get('service_technology', [ServiceTechController::class,'getServiceTech']);
Route::get('service_details/{id}', [Controller::class,'getServiceIndex']);
Route::post('add_serviceTech', [ServiceTechController::class,'addServiceTech']);
Route::delete('deleteservicetech/{id}',[ServiceTechController::class,'deleteServiceTech']);
Route::get('edit_serviceTech/{id}',[ServiceTechController::class,'getServiceTechById']);
Route::post('update_serviceTech/{id}', [ServiceTechController::class,'updateServiceTech']);


Route::get('project_detail/{id}', [ServiceTechController::class,'projectDetail']);
Route::post('detail_send', [ProjectReqController::class,'sendDetail']);





Route::get('aboutIcon', [AboutIconController::class,'index']);
Route::post('add_aboutIcon', [AboutIconController::class,'addAboutIcon']);
Route::get('edit_aboutIcon/{id}',[AboutIconController::class,'getAboutIconById']);
Route::post('update_aboutIcon/{id}', [AboutIconController::class,'updateAboutIcon']);
Route::delete('deleteaboutIcon/{id}',[AboutIconController::class,'deleteAboutIcon']);



Route::get('aboutVideo', [AboutVideoController::class,'index']);
Route::get('addVideo', [AboutVideoController::class,'addAboutVideo']);
Route::get('edit_aboutVideo/{id}',[AboutVideoController::class,'getAboutVideoById']);
Route::post('createaboutVideo',[AboutVideoController::class,'createAboutVideo']);
Route::post('update_aboutVideo/{id}', [AboutVideoController::class,'updateAboutVideo']);
Route::get('videoDescriptions/{id}',[AboutVideoController::class,'getAboutDescriptionById']);
Route::delete('deleteaboutVideo/{id}',[AboutVideoController::class,'deleteAboutVideo']);


Route::post('subscriber', [SubscriberController::class,'subscriberuser']);


// Route::get('portfolio', function () {
//     return view('dashboard/portfolio');
// });

// Route::get('project_detail', function () {
//     return view('form');
// });

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

