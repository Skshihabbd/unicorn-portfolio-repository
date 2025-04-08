<?php

use App\Http\Controllers\About_Controller;
use App\Http\Controllers\ArtificialIntelligence;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\Portfolio_Controller;
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;




// main route



Route::get('/portfolio', function () {
    return view('page.portfolio');
})->name('portfolio');
Route::get('/service', [ServiceController::class,"service_page_all_data_get"])->name('service');
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

Route::get('/service/Cyber-Security', function () {
    return view('service_pages.security');
})->name('security');
// ALL SERVICE SUB-CATEGORY ROUTE

// dashboard-route
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');



//-------------------------------------------------------------------------------------------------------------
//Service_main_route_category_dashboard

//service category section
Route::get("/service_category",[ServiceController::class,"service_category_get_data"])->name("service_category");
Route::post("/service_category_post",[ServiceController::class,"service_category_post_data"]);
Route::get("/service_category_single_data_get/{id}",[ServiceController::class,"service_category_single_data_get"]);
//service category section

//Service_main_route_category_dashboard
//----------------------------------------------------------------------------------------------




// PortFolio_sub_route_dashboard

Route::get('/portfolio_ourwork',[Portfolio_Controller::class,"get_our_work"])->name('our_work');
Route::post('/portfolio_post_ourwork',[Portfolio_Controller::class,"post_our_work"]);
Route::get("/single_data_our_work/{id}",[Portfolio_Controller::class,"get_single_data_our_work"])->name("single_data_our_work");

Route::post("/single_data_our_work_update/{id}",[Portfolio_Controller::class,"single_data_our_work_update"]);
Route::delete("/single_data_our_work_delete/{id}",[Portfolio_Controller::class,'single_data_our_work_delete'])->name('single_data_our_work_deletes');

// PortFolio_sub_route_dashboard






//home-page-main-route
Route::get('/',[Home_Controller::class,"AllHomeDataGet"] )->name('home');

// ourservice_crud_route_homepage

Route::get("/home_ourservice_get_data",[Home_Controller::class,"home_ourservice_get_data"])->name('home_ourservice_get_data');
Route::get("/home_ourservice_single_data/{id}",[Home_Controller::class,"home_ourservice_single_data"])->name('home_ourservice_single_data');

Route::post("/home_ourservice_post_data",[Home_Controller::class,"home_ourservice_post_data"]);

Route::post("/home_ourservice_update_data/{id}",[Home_Controller::class,"home_ourservice_update_data"]);


Route::delete("/home_ourservice_delete_data/{id}",[Home_Controller::class,"home_ourservice_delete_data"])->name('home_ourservice_delete_data');


// ourservice_crud_route_homepage














// what we do home_analysis_section  crud operation_homepage

Route::get("/home_analysis_get_data",[Home_Controller::class,"home_analysis_get_data"])->name('home_analysis_get_data');
Route::get("/home_analysis_single_data/{id}",[Home_Controller::class,"home_analysis_single_data"])->name('home_analysis_single_data');

Route::post("/home_analysis_post_data",[Home_Controller::class,"home_analysis_post_data"]);

Route::post("/home_analysis_update_data/{id}",[Home_Controller::class,"home_analysis_update_data"]);


Route::delete("/home_analysis_delete_data/{id}",[Home_Controller::class,"home_analysis_delete_data"])->name('home_analysis_delete_data');


// what we do section  crud operation_homepage


//--------------------------------------------------------------------------------
//why choose us crud operation_homepage



Route::get("/home_choose_us_get_data",[Home_Controller::class,"home_choose_us_get_data"])->name('home_choose_us_get_data');
Route::get("/home_choose_us_single_data/{id}",[Home_Controller::class,"home_choose_us_single_data"])->name('home_choose_us_single_data');

Route::post("/home_choose_us_post_data",[Home_Controller::class,"home_choose_us_post_data"]);

Route::post("/home_choose_us_update_data/{id}",[Home_Controller::class,"home_choose_us_update_data"]);


Route::delete("/home_choose_us_delete_data/{id}",[Home_Controller::class,"home_choose_us_delete_data"])->name('home_choose_us_delete_data');

















//why choose us crud operation_homepage

//---------------------------------------------------------------------------------


//-----------------------------------------------------------------------
//how we work home page section

Route::get("/home_how_we_work_get_data",[Home_Controller::class,"home_how_we_work_get_data"])->name('home_how_we_work_get_data');
Route::get("/home_how_we_work_single_data/{id}",[Home_Controller::class,"home_how_we_work_single_data"])->name('home_how_we_work_single_data');

Route::post("/home_how_we_work_post_data",[Home_Controller::class,"home_how_we_work_post_data"]);

Route::post("/home_how_we_work_update_data/{id}",[Home_Controller::class,"home_how_we_work_update_data"]);


Route::delete("/home_how_we_work_delete_data/{id}",[Home_Controller::class,"home_how_we_work_delete_data"])->name('home_how_we_work_delete_data');

//how we work home page section




//about_main_page_route
Route::get('/about', [About_Controller::class,'about_page_get']
)->name('about');
//about_page_sub_route_who_we_are

Route::get("/about_page_who_we_are_get_data",[About_Controller::class,"about_page_who_we_are_get_data"])->name('about_page_who_we_are_get_data');
Route::get("/about_page_who_we_are_single_data/{id}",[About_Controller::class,"about_page_who_we_are_single_data"])->name('about_page_who_we_are_single_data');

Route::post("/about_page_who_we_are_post_data",[About_Controller::class,"about_page_who_we_are_post_data"]);

Route::post("/about_page_who_we_are_update_data/{id}",[About_Controller::class,"about_page_who_we_are_update_data"]);


Route::delete("/about_page_who_we_are_delete_data/{id}",[About_Controller::class,"about_page_who_we_are_delete_data"])->name('about_page_who_we_are_delete_data');

//about_page_sub_route_who_we_are





//service sub category all route

//network route

// section-1

// section-1
//---------------------------------------------------------------
// section-2
// section-2
//---------------------------------------------------------------
// section-3
// section-3
//---------------------------------------------------------------
//network route
//---------------------------------------------------------------
//Testing route

// section-1
// section-1
//---------------------------------------------------------------
// section-2
// section-2
//---------------------------------------------------------------
// section-3
// section-3
//---------------------------------------------------------------
//Testing route
//---------------------------------------------------------------
//Buisness Excellence route

// section-1
// section-1
//---------------------------------------------------------------
// section-2
// section-2
//---------------------------------------------------------------
// section-3
// section-3
//---------------------------------------------------------------
//Buisness Excellence route
//---------------------------------------------------------------
//Integrated Engineering route

// section-1
// section-1
//---------------------------------------------------------------
// section-2
// section-2
//---------------------------------------------------------------
// section-3
// section-3
//---------------------------------------------------------------
//Integrated Engineering route
//---------------------------------------------------------------
//Intelligent Automation route

// section-1
// section-1
//---------------------------------------------------------------
// section-2
// section-2
//---------------------------------------------------------------
// section-3
// section-3
//---------------------------------------------------------------
//Intelligent Automation route
//---------------------------------------------------------------
//Cyber Secuirity route

// section-1
// section-1
//---------------------------------------------------------------
// section-2
// section-2
//---------------------------------------------------------------
// section-3
// section-3
//---------------------------------------------------------------
//Cyber Secuirity route
//---------------------------------------------------------------

//Artificial Intelligence route
Route::get('/service/Artificial-Intelligence',[ArtificialIntelligence::class,"artificialIntelligence_data_get"])->name('ai');
// section-1
Route::get("/ai_section_1_get_data",[ArtificialIntelligence::class,"ai_section_1_get_data"])->name('ai_section_1_get_data');
Route::get("/ai_section_1_single_data/{id}",[ArtificialIntelligence::class,"ai_section_1_single_data"])->name('ai_section_1_single_data');

Route::post("/ai_section_1_post_data",[ArtificialIntelligence::class,"ai_section_1_post_data"]);

Route::post("/ai_section_1_update_data/{id}",[ArtificialIntelligence::class,"ai_section_1_update_data"]);


Route::delete("/ai_section_1_delete_data/{id}",[ArtificialIntelligence::class,"ai_section_1_delete_data"])->name('ai_section_1_delete_data');
// section-1
//---------------------------------------------------------------
// section-2

Route::get("/ai_section_2_get_data",[ArtificialIntelligence::class,"ai_section_2_get_data"])->name('ai_section_2_get_data');
Route::get("/ai_section_2_single_data/{id}",[ArtificialIntelligence::class,"ai_section_2_single_data"])->name('ai_section_2_single_data');

Route::post("/ai_section_2_post_data",[ArtificialIntelligence::class,"ai_section_2_post_data"]);

Route::post("/ai_section_2_update_data/{id}",[ArtificialIntelligence::class,"ai_section_2_update_data"]);
Route::delete("/ai_section_2_delete_data/{id}",[ArtificialIntelligence::class,"ai_section_2_delete_data"])->name('ai_section_2_delete_data');
// section-2
//---------------------------------------------------------------
// section-3
Route::get("/ai_section_3_get_data",[ArtificialIntelligence::class,"ai_section_3_get_data"])->name('ai_section_3_get_data');
Route::get("/ai_section_3_single_data/{id}",[ArtificialIntelligence::class,"ai_section_3_single_data"])->name('ai_section_3_single_data');
Route::post("/ai_section_3_post_data",[ArtificialIntelligence::class,"ai_section_3_post_data"]);
Route::post("/ai_section_3_update_data/{id}",[ArtificialIntelligence::class,"ai_section_3_update_data"]);
Route::delete("/ai_section_3_delete_data/{id}",[ArtificialIntelligence::class,"ai_section_3_delete_data"])->name('ai_section_3_delete_data');
// section-3
//---------------------------------------------------------------
//Artificial Engineering route
//---------------------------------------------------------------

















//service sub category all route








// not found route

Route::any('{catchall}', function () {
    return view('errors.404');
})->where('catchall', '.*');



