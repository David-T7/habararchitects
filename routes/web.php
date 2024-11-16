<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WebpagesController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'openHabarHomepage'])->name('habar.home');
Route::get('/team', [PagesController::class, 'openHabarTeampage'])->name('habar.team');
Route::get('/about', [PagesController::class, 'openHabarAboutpage'])->name('habar.about');
Route::get('/contact', [PagesController::class, 'openHabarContactpage'])->name('habar.contact');
Route::get('/projects', [PagesController::class, 'openHabarProjects'])->name('habar.project_list');
Route::get('/products', [PagesController::class, 'openHabarProducts'])->name('habar.product_list');
Route::get('/project/{id}', [PagesController::class, 'openHabarProject'])->name('habar.project');
Route::get('/product/{id}', [PagesController::class, 'openHabarProduct'])->name('habar.product');
Route::get('/news', [PagesController::class, 'openHabarAllNews'])->name('habar.news_list');
Route::get('/news/{id}', [PagesController::class, 'openHabarNews'])->name('habar.news');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
        
    Route::resource('webpages', WebpagesController::class);
    Route::resource('post_projects', ProjectsController::class);
    Route::resource('post_news', NewsController::class);
    Route::resource('users', UsersController::class);
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', UsersController::class);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    });
});