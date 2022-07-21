<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\frontend'], function () {
    Route::get('', 'FrontendController@homepageindex')->name('homepage');
    Route::get('about', 'FrontendController@aboutindex')->name('about');
    Route::get('contactus', 'FrontendController@contactusindex')->name('contactus');
    Route::post('contactus', 'ContactController@store')->name('contactus.store');
    Route::get('blog', 'FrontendController@blogindex')->name('blog');
    Route::get('team', 'FrontendController@teamindex')->name('team');
    Route::get('services', 'FrontendController@servicesindex')->name('services');
    Route::get('portfolio', 'FrontendController@portfolioindex')->name('portfolio');
    Route::get('about', 'FrontendController@aboutindex')->name('about');
});
//static_options_routes

Route::post('admin/staticoptions', [StaticOptionController::class, 'submitoptions'])->name('admin.static-options');
Route::get('admin/home/statics', [StaticOptionController::class, 'homeoptionsindex'])->name('admin.home.static');
Route::get('admin/services/statics', [StaticOptionController::class, 'servicesoptionsindex'])->name('admin.service.static');
Route::get('admin/contact/statics', [StaticOptionController::class, 'contactoptionsindex'])->name('admin.contact.static');
Route::get('admin/about/statics', [StaticOptionController::class, 'aboutoptionsindex'])->name('admin.about.static');

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\backend', 'middleware' => (['auth'])], function () {

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

    // about routes
    Route::get('aboutus', 'AboutController@index')->name('admin.aboutus');
    Route::get('about/edit/{id}', 'AboutController@edit')->name('admin.about.edit');
    Route::post('about/update/{id}', 'AboutController@update')->name('admin.about.update');
    Route::get('about/delete/{id}', 'AboutController@delete')->name('admin.about.delete');
    Route::get('about/view/{id}', 'AboutController@show')->name('admin.about.view');
    Route::post('about/store', 'AboutController@store')->name('admin.about.store');
    Route::get('about/create', 'AboutController@create')->name('admin.about.create');

    //blog routes
    Route::get('blog/edit/{id}', 'BlogController@edit')->name('admin.blog.edit');
    Route::get('blog', 'BlogController@index')->name('admin.blogs');
    Route::post('blog/update/{id}', 'BlogController@update')->name('admin.blog.update');
    Route::get('blog/view/{id}', 'BlogController@show')->name('admin.blog.view');
    Route::post('blog/store', 'BlogController@store')->name('admin.blog.store');
    Route::get('blog/delete/{id}', 'BlogController@delete')->name('admin.blog.delete');
    Route::get('blog/create', 'BlogController@create')->name('admin.blog.create');

    //blog-posts routes
    Route::get('blogposts/edit/{id}', 'BlogpostsController@edit')->name('admin.blogposts.edit');
    Route::get('blogposts', 'BlogpostsController@index')->name('admin.blogposts');
    Route::post('blogposts/update/{id}', 'BlogpostsController@update')->name('admin.blogposts.update');
    Route::get('blogposts/view/{id}', 'BlogpostsController@show')->name('admin.blogposts.view');
    Route::post('blogposts/store', 'BlogpostsController@store')->name('admin.blogposts.store');
    Route::get('blogposts/delete/{id}', 'BlogpostsController@delete')->name('admin.blogposts.delete');
    Route::get('blogposts/create', 'BlogpostsController@create')->name('admin.blogposts.create');

    //contact routes
    Route::get('contactus', 'ContactusController@index')->name('admin.contactus');
    Route::post('contactus/store', 'ContactusController@store')->name('admin.contactus.store');
    Route::get('contactus/edit/{id}', 'ContactusController@edit')->name('admin.contactus.edit');
    Route::post('contactus/update/{id}', 'ContactusController@update')->name('admin.contactus.update');
    Route::get('contactus/view/{id}', 'ContactusController@show')->name('admin.contactus.view');
    Route::get('contactus/delete/{id}', 'ContactusController@delete')->name('admin.contactus.delete');
    Route::get('contactus/create', 'ContactusController@create')->name('admin.contactus.create');

    //homepage routes
    Route::post('homepage/store', 'HomeController@store')->name('admin.homepage.store');
    Route::get('homepage/edit/{id}', 'HomeController@edit')->name('admin.homepage.edit');
    Route::post('homepage/update/{id}', 'HomeController@update')->name('admin.homepage.update');
    Route::get('homepage/view/{id}', 'HomeController@show')->name('admin.homepage.view');
    Route::get('homepage/delete/{id}', 'HomeController@delete')->name('admin.homepage.delete');
    Route::get('homepage/create', 'HomeController@create')->name('admin.homepage.create');
    Route::get('homepage', 'HomeController@index')->name('admin.homepage');
    //homecards routes
    Route::get('homecards', 'HomecardsController@index')->name('admin.homecards');
    Route::post('homecards/store', 'HomecardsController@store')->name('admin.homecards.store');
    Route::get('homecards/edit/{id}', 'HomecardsController@edit')->name('admin.homecards.edit');
    Route::post('homecards/update/{id}', 'HomecardsController@update')->name('admin.homecards.update');
    Route::get('homecards/view/{id}', 'HomecardsController@show')->name('admin.homecards.view');
    Route::get('homecards/delete/{id}', 'HomecardsController@delete')->name('admin.homecards.delete');
    Route::get('homecards/create', 'HomecardsController@create')->name('admin.homecards.create');
    //sliders routes
    Route::get('sliders', 'slidersController@index')->name('admin.sliders');
    Route::post('sliders/store', 'slidersController@store')->name('admin.sliders.store');
    Route::get('sliders/edit/{id}', 'slidersController@edit')->name('admin.sliders.edit');
    Route::post('sliders/update/{id}', 'slidersController@update')->name('admin.sliders.update');
    Route::get('sliders/view/{id}', 'slidersController@show')->name('admin.sliders.view');
    Route::get('sliders/delete/{id}', 'slidersController@delete')->name('admin.sliders.delete');
    Route::get('sliders/create', 'slidersController@create')->name('admin.sliders.create');

    //team routes
    Route::get('team', 'TeamController@index')->name('admin.team');
    Route::post('team/store', 'TeamController@store')->name('admin.team.store');
    Route::get('team/edit/{id}', 'TeamController@edit')->name('admin.team.edit');
    Route::post('team/update/{id}', 'TeamController@update')->name('admin.team.update');
    Route::get('team/view/{id}', 'TeamController@show')->name('admin.team.view');
    Route::get('team/delete/{id}', 'TeamController@delete')->name('admin.team.delete');
    Route::get('team/create', 'TeamController@create')->name('admin.team.create');
    //portfolio routes
    Route::get('portfolio', 'PortfolioController@index')->name('admin.portfolio');
    Route::post('portfolio/store', 'PortfolioController@store')->name('admin.portfolio.store');
    Route::get('portfolio/edit/{id}', 'PortfolioController@edit')->name('admin.portfolio.edit');
    Route::post('portfolio/update/{id}', 'PortfolioController@update')->name('admin.portfolio.update');
    Route::get('portfolio/view/{id}', 'PortfolioController@show')->name('admin.portfolio.view');
    Route::get('portfolio/delete/{id}', 'PortfolioController@delete')->name('admin.portfolio.delete');
    Route::get('portfolio/create', 'PortfolioController@create')->name('admin.portfolio.create');
    //services routes

    Route::get('services', 'ServicesController@index')->name('admin.services');
    Route::post('services/store', 'ServicesController@store')->name('admin.services.store');
    Route::get('services/edit/{id}', 'ServicesController@edit')->name('admin.services.edit');
    Route::post('services/update/{id}', 'ServicesController@update')->name('admin.services.update');
    Route::get('services/view/{id}', 'ServicesController@show')->name('admin.services.view');
    Route::get('services/delete/{id}', 'ServicesController@delete')->name('admin.services.delete');
    Route::get('services/create', 'ServicesController@create')->name('admin.services.create');

    //services-cards routes

    Route::get('services-cards', 'ServicescardController@index')->name('admin.service-cards');
    Route::post('services-cards/store', 'ServicescardController@store')->name('admin.service-cards.store');
    Route::get('services-cards/edit/{id}', 'ServicescardController@edit')->name('admin.service-cards.edit');
    Route::post('services-cards/update/{id}', 'ServicescardController@update')->name('admin.service-cards.update');
    Route::get('services-cards/view/{id}', 'ServicescardController@show')->name('admin.service-cards.view');
    Route::get('services-cards/delete/{id}', 'ServicescardController@delete')->name('admin.service-cards.delete');
    Route::get('services-cards/create', 'ServicescardController@create')->name('admin.service-cards.create');
    //home routes

});
require __DIR__ . '/auth.php';
