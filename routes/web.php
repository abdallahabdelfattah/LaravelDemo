<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyContoller;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WebsitesCompanyContoller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('company', CompanyContoller::class);
Route::resource('students', StudentController::class);
Route::resource('Comments', CommentController::class);
Route::resource('Websites', WebsitesCompanyContoller::class);
Route::get('get-webSites/{id}', [WebsitesCompanyContoller::class, 'getWebSites']);
Route::get('get-comments/{id}', [SiteController::class, 'getComments']);
Route::get('get-student/{id}', [SiteController::class, 'getStudent']);



