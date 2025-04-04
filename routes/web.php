<?php

// use App\Http\Controllers\Contact;

use App\Http\Controllers\Analysis;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\Portfolio_Controller;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;




// main route

Route::get('/',[Home_Controller::class,"AllHomeDataGet"] )->name('home');
Route::get('/about', function () {
    return view('page.about');
})->name('about');
Route::get('/portfolio', function () {
    return view('page.portfolio');
})->name('portfolio');
Route::get('/service', function () {
    return view('page.service');
})->name('service');
Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('/daynamic-content/{id}', function () {
    return view('page.dynamic');
})->name('dynamic');




// ALL SERVICE SUB-CATEGORY ROUTE
Route::get('/service/network', function () {
    return view('service_pages.network');
})->name('network');
Route::get('/service/testing', function () {
    return view('service_pages.testing');
})->name('testing');
Route::get('/service/buisness-intelligence', function () {
    return view('service_pages.buisness');
})->name('buisness');
Route::get('/service/Integrated-engineering', function () {
    return view('service_pages.integrated');
})->name('integrated');
Route::get('/service/Intelligence-automation', function () {
    return view('service_pages.intelligent');
})->name('intelligence');
Route::get('/service/Artificial-Intelligence', function () {
    return view('service_pages.ai');
})->name('ai');
Route::get('/service/Cyber-Security', function () {
    return view('service_pages.security');
})->name('security');
// ALL SERVICE SUB-CATEGORY ROUTE

// dashboard-route
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');






// PortFolio_sub_route_dashboard

Route::get('/portfolio_ourwork',[Portfolio_Controller::class,"get_our_work"])->name('our_work');
Route::post('/portfolio_post_ourwork',[Portfolio_Controller::class,"post_our_work"]);
Route::get("/single_data_our_work/{id}",[Portfolio_Controller::class,"get_single_data_our_work"])->name("single_data_our_work");

Route::post("/single_data_our_work_update/{id}",[Portfolio_Controller::class,"single_data_our_work_update"]);
Route::delete("/single_data_our_work_delete/{id}",[Portfolio_Controller::class,'single_data_our_work_delete'])->name('single_data_our_work_deletes');

// PortFolio_sub_route_dashboard




// ourstore_crud_route


Route::get('/ourservice',[Home_Controller::class,"getOurService"] )->name('ourservice');

Route::post('storeourservice', [Home_Controller::class, "storeOurService"])->name('storeourservice');

Route::get(
    '/ourserviceget',
    [Home_Controller::class, "getOurService"]
);

Route::get(
    '/ourservicegetsingle/{id}',
    [Home_Controller::class, "GetSingleDataOurService"]
)->name('ourserviceupdatesinglevalue');



Route::delete(
    '/ourservicedelete/{id}',
    [Home_Controller::class, "DeleteSingleDataOurService"]
)->name('ourservicedeletesingle');

Route::put('/ourservice_update/{id}',[Home_Controller::class ,"singleValueUpdate"])->name('ourservice_update');


// ourstore_crud_route

// what we do section  crud operation

Route::get('/analysis-section',[Home_Controller::class,"analysis_section_get_data"]
)->name("analysis");

 Route::post('/analysis_section_post',[Home_Controller::class,"analysis_section_data_post"])->name("analysis_section_data_posts");


// what we do section  crud operation











// not found route

Route::any('{catchall}', function () {
    return view('errors.404');
})->where('catchall', '.*');



