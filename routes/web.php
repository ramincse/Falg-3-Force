<?php

use Illuminate\Support\Facades\Route;

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
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Login
Route::get('/login', [App\Http\Controllers\AdminController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('admin.login');

//Admin Register
Route::get('/register', [App\Http\Controllers\AdminController::class, 'showAdminRegisterForm'])->name('admin.register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('admin.register');

//Admin Dashboard Load
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'showAdminDashboard'])->name('admin.dashboard');

//Admin LogOut
Route::post('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');

/**
 * Slider
 */
Route::resource('/slider', 'App\Http\Controllers\SliderController');
Route::get('/slider-status-update/{id}', 'App\Http\Controllers\SliderController@updateSliderStatus')->name('slider.status.update');

/**
 * Portfolio
 */
Route::resource('/portfolio', 'App\Http\Controllers\PortfolioController');
Route::get('/portfolio-status-update/{id}', 'App\Http\Controllers\PortfolioController@updatePortfolioStatus')->name('portfolio.status.update');
//Route::get('/portfolio-delete/{id}', 'App\Http\Controllers\PortfolioController@destroy')->name('portfolio.data.delete');

/**
 * Service
 */
Route::resource('/service', 'App\Http\Controllers\ServiceController');
Route::get('/service-status-update/{id}', 'App\Http\Controllers\ServiceController@updateServiceStatus')->name('service.status.update');

/**
 * Flag 3 SECURITY SERVICES
 */
Route::resource('/fsservice', 'App\Http\Controllers\FSServiceController');
Route::get('/fsservice-status-update/{id}', 'App\Http\Controllers\FSServiceController@updateFSServiceStatus')->name('fsservice.status.update');

/**
 * Testimonial
 */
Route::resource('/testimonial', 'App\Http\Controllers\TestimonialController');
Route::get('/testimonial-status-update/{id}', 'App\Http\Controllers\TestimonialController@updateTestimonialStatus')->name('testimonial.status.update');

/**
 * Testimonial
 */
Route::resource('/client', 'App\Http\Controllers\ClientController');
Route::get('/client-status-update/{id}', 'App\Http\Controllers\ClientController@updateClientStatus')->name('client.status.update');

/**
 * Gallery
 */
Route::resource('/gallery', 'App\Http\Controllers\GalleryController');
Route::get('/gallery-status-update/{id}', 'App\Http\Controllers\GalleryController@updateGalleryStatus')->name('gallery.status.update');

/**
 * Accessories
 */
Route::resource('/accessory', 'App\Http\Controllers\AccessoryController');
Route::get('/accessory-status-update/{id}', 'App\Http\Controllers\AccessoryController@updateAccessoryStatus')->name('accessory.status.update');

/**
 * Accessories (Our Service)
 */
Route::get('/top-service', 'App\Http\Controllers\OurServiceController@showToService')->name('top.service');
Route::post('/top-service', 'App\Http\Controllers\OurServiceController@updateToService')->name('top.service');

/**
 * Contact Us
 */
Route::get('/contact', 'App\Http\Controllers\ContactUsController@showContactUS')->name('contact.us');
Route::post('/contact', 'App\Http\Controllers\ContactUsController@insertContactUS')->name('contact.us');

/**
 * Frontend
 */
Route::get('/', 'App\Http\Controllers\FrontendController@homePage')->name('home.page');
Route::get('/clients', 'App\Http\Controllers\FrontendController@showClientPage')->name('client.page');
Route::get('/f3f-gallery', 'App\Http\Controllers\FrontendController@showGalleryPage')->name('gallery.page');
Route::get('/our-service', 'App\Http\Controllers\FrontendController@showOurServicePage')->name('service.page');
Route::get('/about-us', 'App\Http\Controllers\FrontendController@showAboutUsPage')->name('about.page');
Route::get('/contact-us', 'App\Http\Controllers\FrontendController@showContactUsPage')->name('contact.page');

