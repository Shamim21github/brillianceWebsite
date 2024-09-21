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

// portfolio/work section start
Route::get('/portfolio', function () {
    return view('pages.frontend.portfolio');
})->name('portfolio');

Route::get('/portfolio-details', function () {
    return view('pages.frontend.portfolioDetails');
})->name('portfolio-details');

// Route::get('/corporate-details', function () {
//     return view('pages.frontend.corporateEventDetails');
// })->name('activition-details');
// Route::get('/portfolio-details', function () {
//     return view('pages.frontend.activationDetails');
// })->name('branding-details');
// Route::get('/portfolio-details', function () {
//     return view('pages.frontend.portfolioDetails');
// })->name('bootinterior-details');
// Route::get('/portfolio-details', function () {
//     return view('pages.frontend.portfolioDetails');
// })->name('officeinterior-details');
// Route::get('/portfolio-details', function () {
//     return view('pages.frontend.portfolioDetails');
// })->name('seminar-details');
// Route::get('/portfolio-details', function () {
//     return view('pages.frontend.portfolioDetails');
// })->name('exhibition-details');
// Route::get('/portfolio-details', function () {
//     return view('pages.frontend.portfolioDetails');
// })->name('cultural-details');
// Route::get('/portfolio-details', function () {
//     return view('pages.frontend.portfolioDetails');
// })->name('portfolio-details');


Route::get('/corporate-details', function () {
    return view('pages.frontend.corporateEventDetails');
})->name('corporate-details');

Route::get('/activition-details', function () {
    return view('pages.frontend.activationDetails');
})->name('activition-details');

Route::get('/branding-details', function () {
    return view('pages.frontend.brandingDetails');
})->name('branding-details');

Route::get('/boothinterior-details', function () {
    return view('pages.frontend.boothInteriorDetails');
})->name('boothinterior-details');

Route::get('/officeinterior-details', function () {
    return view('pages.frontend.officeInteriorDetails');
})->name('officeinterior-details');

Route::get('/seminar-details', function () {
    return view('pages.frontend.seminarDetails');
})->name('seminar-details');

Route::get('/exhibition-details', function () {
    return view('pages.frontend.exhibitionmanagementDetails');
})->name('exhibition-details');

Route::get('/cultural-details', function () {
    return view('pages.frontend.culturalProgrammeDetails');
})->name('cultural-details');

Route::get('/convocation-details', function () {
    return view('pages.frontend.convocationDetails');
})->name('convocation-details');





// portfolio/work section end

Route::get('/team', function () {
    return view('pages.frontend.team');
})->name('team');

Route::get('/team-details', function () {
    return view('pages.frontend.teamDetails');
})->name('team-details');

Route::get('/gallery', function () {
    return view('pages.frontend.gallery');
})->name('gallery');

Route::get('/gallery-details', function () {
    return view('pages.frontend.galleryDetails');
})->name('gallery-details');

Route::get('/contact', function () {
    return view('pages.frontend.contact');
})->name('contact');

// Route::post('/contacts', function () {
//     return view('pages.frontend.contact');
// })->name('contacts');



