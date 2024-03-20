<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('pages.frontend.home');
});

Route::get('/about', function () {
    return view('pages.frontend.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.frontend.service');
})->name('services');

Route::get('/service-details', function () {
    return view('pages.frontend.serviceDetails');
})->name('service-details');


Route::get('/portfolio', function () {
    return view('pages.frontend.portfolio');
})->name('portfolio');

Route::get('/portfolio-details', function () {
    return view('pages.frontend.portfolioDetails');
})->name('portfolio-details');

Route::get('/team', function () {
    return view('pages.frontend.team');
})->name('team');

Route::get('/team-details', function () {
    return view('pages.frontend.teamDetails');
})->name('team-details');

Route::get('/blog', function () {
    return view('pages.frontend.blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('pages.frontend.blogDetails');
})->name('blog-details');

Route::get('/contact', function () {
    return view('pages.frontend.contact');
})->name('contact');

// Route::post('/contacts', function () {
//     return view('pages.frontend.contact');
// })->name('contacts');



