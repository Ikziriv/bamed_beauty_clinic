<?php

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

Auth::routes();

Route::post('/register-normal', 'AuthController@register')->name('register-normal');
Route::post('/register-confirm', 'AuthController@registerConfirm')->name('register-confirm');
Route::post('/login-client', 'AuthController@loginClient')->name('login-client');
Route::post('/change-password', 'AuthController@change_password')->name('change-password');
Route::post('/reset-password', 'AuthController@reset_password')->name('reset-password');

Route::post('/login-sosial', 'AuthController@loginSosial')->name('login-sosial');
// Route::post('/login-normal', 'AuthController@login')->name('login-normal');
Route::group(['middleware' => 'auth'], function(){
		Route::get('/beranda', 'AdminController@index')->name('beranda');
	// Setting
		Route::get('/setting', 'AdminController@setting')->name('setting');
		Route::post('/setting/save', 'AdminController@change_password_admin')->name('setting-save');
	// ---
	// News & Advice
	$post_control = "\App\Modules\Post\Http\Controllers\PostController";
		// GET
		Route::get('/post', "{$post_control}@index")->name('post');
		Route::get('/post/create', "{$post_control}@create")->name('post-create');
		Route::get('/post/{id}/edit', "{$post_control}@edit")->name('post-edit');
		Route::get('/post/view/{id}', "{$post_control}@show")->name('post-view');
		// POST
		Route::post('/post/save', "{$post_control}@store")->name('post-save');
		Route::post('/post/edit/{id}', "{$post_control}@update")->name('post-update');
		// DELETE
		Route::delete('/post/{id}', "{$post_control}@destroy")->name('post-delete');
	// Category
	$category_control = "\App\Modules\Category\Http\Controllers\CategoryController";
		// GET
		Route::get('/category', "{$category_control}@index")->name('category');
		Route::get('/category/create', "{$category_control}@create")->name('category-create');
		Route::get('/category/{id}/edit', "{$category_control}@edit")->name('category-edit');
		// POST
		Route::post('/category/save', "{$category_control}@store")->name('category-save');
		Route::post('/category/edit/{id}', "{$category_control}@update")->name('category-update');
		// DELETE
		Route::delete('/category/{id}', "{$category_control}@destroy")->name('category-delete');
	// ---
	// Doctor
	$doctor_control = "\App\Modules\Doctor\Http\Controllers\DoctorController";
		// GET
		Route::get('/doctor', "{$doctor_control}@index")->name('doctor');
		Route::get('/doctor/{doctor}/edit', "{$doctor_control}@edit")->name('doctor-edit');
		// POST
		Route::post('/doctor/edit/{id}', "{$doctor_control}@update")->name('doctor-update');
	// ---
	// Sub Doctor
	$subdoctor_control = "\App\Modules\Doctor\Http\Controllers\DoctorSubController";
		// GET
		Route::get('/subdoctor', "{$subdoctor_control}@index")->name('subdoctor');
		Route::get('/subdoctor/create', "{$subdoctor_control}@create")->name('subdoctor-create');
		Route::get('/subdoctor/{id}/edit', "{$subdoctor_control}@edit")->name('subdoctor-edit');
		Route::get('/subdoctor/view/{id}', "{$subdoctor_control}@show")->name('subdoctor-view');
		// POST
		Route::post('/subdoctor/save', "{$subdoctor_control}@store")->name('subdoctor-save');
		Route::post('/subdoctor/edit/{subdoctor}', "{$subdoctor_control}@update")->name('subdoctor-update');
		// Delete
		Route::delete('/subdoctor/{id}', "{$subdoctor_control}@destroy")->name('subdoctor-delete');
	// ---
	// Schedule Doctor
	$schedule_doctor_control = "\App\Modules\Doctor\Http\Controllers\DoctorScheduleController";
		// GET
		Route::get('/schedule', "{$schedule_doctor_control}@index")->name('schedule');
		Route::get('/schedule/create', "{$schedule_doctor_control}@create")->name('schedule-create');
		Route::get('/schedule/{id}/edit', "{$schedule_doctor_control}@edit")->name('schedule-edit');
		// POST
		Route::post('/schedule/save', "{$schedule_doctor_control}@store")->name('schedule-save');
		Route::post('/schedule/edit/{id}', "{$schedule_doctor_control}@update")->name('schedule-update');
		// DELETE
		Route::delete('/schedule/{id}', "{$schedule_doctor_control}@destroy")->name('schedule-delete');
	// ---
	// City 
	$city_control = "\App\Modules\City\Http\Controllers\CityController";
		// GET
		Route::get('/city', "{$city_control}@index")->name('city');
		Route::get('/city/create', "{$city_control}@create")->name('city-create');
		Route::get('/city/{id}/edit', "{$city_control}@edit")->name('city-edit');
		// POST
		Route::post('/city/save', "{$city_control}@store")->name('city-save');
		Route::post('/city/edit/{id}', "{$city_control}@update")->name('city-update');
		// DELETE
		Route::delete('/city/{id}', "{$city_control}@destroy")->name('city-delete');
	// ---
	// Client 
	$client_control = "\App\Modules\Client\Http\Controllers\ClientController";
		// GET
		Route::get('/client', "{$client_control}@index")->name('client');
		// Tester Email
		Route::get('/client/create', "{$client_control}@create")->name('client-create');
		// -----------
		Route::get('/client/{id}/edit', "{$client_control}@edit")->name('client-edit');
		Route::get('/client/view/{id}', "{$client_control}@show")->name('client-view');
		// 
		Route::post('/client/edit/{id}', "{$client_control}@update")->name('client-update');
		// DELETE
		Route::delete('/client/{id}', "{$client_control}@destroy")->name('client-delete');
	// ---
	// Service 
	$service_control = "\App\Modules\Service\Http\Controllers\ServiceController";
		// GET
		Route::get('/service', "{$service_control}@index")->name('service');
		Route::get('/service/{service}/edit', "{$service_control}@edit")->name('service-edit');
		// POST
		Route::post('/service/edit/{service}', "{$service_control}@update")->name('service-update');
	// ---
	// Sub Service
	$subservice_control = "\App\Modules\Service\Http\Controllers\SubServiceController";
		// GET
		Route::get('/subservice', "{$subservice_control}@index")->name('subservice');
		Route::get('/subservice/create', "{$subservice_control}@create")->name('subservice-create');
		Route::get('/subservice/{id}/edit', "{$subservice_control}@edit")->name('subservice-edit');
		Route::get('/subservice/view/{id}', "{$subservice_control}@show")->name('subservice-view');
		// POST
		Route::post('/subservice/save', "{$subservice_control}@store")->name('subservice-save');
		Route::post('/subservice/edit/{subservice}', "{$subservice_control}@update")->name('subservice-update');
		// DELETE
		Route::delete('/subservice/{id}', "{$subservice_control}@destroy")->name('subservice-delete');
	// ---
	// About
	$about_control = "\App\Modules\About\Http\Controllers\AboutController";
		// GET
		Route::get('/about', "{$about_control}@index")->name('about');
		Route::get('/about/{id}/edit', "{$about_control}@edit")->name('about-edit');
		// POST
		Route::post('/about/edit/{id}', "{$about_control}@update")->name('about-update');
		// About Partner
			Route::get('/about/upload/', "{$about_control}@upload_partner")->name('about-upload');
			Route::post('/about/upload/', "{$about_control}@upload_store")->name('about-upload-store');
			// EDIT
			Route::post('/about-partner/insert/{id}', "{$about_control}@insert_partner")->name('about-partner-insert');
			Route::post('/about-partner/edit/{id}', "{$about_control}@update_partner")->name('about-partner-update');
			// DELETE
			Route::delete('/about-partner/{id}', "{$about_control}@destroy")->name('about-partner-delete');
	// ---
	// Contact
	$contact_control = "\App\Modules\Contact\Http\Controllers\ContactController";
		// GET
		Route::get('/contact', "{$contact_control}@index")->name('contact');
		Route::get('/contact/{contact}/edit', "{$contact_control}@edit")->name('contact-edit');
		// POST
		Route::post('/contact/edit/{contact}', "{$contact_control}@update")->name('contact-update');
	// ---
	// Promo
	$promo_control = "\App\Modules\Promo\Http\Controllers\PromoController";
		// GET
		Route::get('/promo', "{$promo_control}@index")->name('promo');
		Route::get('/promo/upload', "{$promo_control}@create")->name('promo-create');
		// POST
		Route::post('/promo/save', "{$promo_control}@store")->name('promo-save');
		// DELETE
		Route::delete('/promo/{id}', "{$promo_control}@destroy")->name('promo-delete');
});
