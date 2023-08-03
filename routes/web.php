<?php

use App\Http\Controllers\BuildindingController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home_all_details', [App\Http\Controllers\PagesController::class, 'home_all_details'])->name('home_all_details');


Route::get('/add_event', [App\Http\Controllers\PagesController::class, 'add_event'])->name('add_event');
Route::get('/view_event', [App\Http\Controllers\PagesController::class, 'view_event'])->name('view_event');

Route::get('/view', [App\Http\Controllers\PagesController::class, 'view'])->name('view');

Route::get('/add_event_details', [App\Http\Controllers\PagesController::class, 'add_event_details'])->name('add_event_details');
Route::get('/view_event_details', [App\Http\Controllers\PagesController::class, 'view_event_details'])->name('view_event_details');


Route::get('building' , [BuildindingController::class, 'add_building'])->name('add_building');

Route::get('citizen' , [BuildindingController::class, 'add_new_citizen'])->name('add_new_citizen');


//ajax
Route::get('/buildings/delete_one_building',[\App\Http\Controllers\BuildindingController::class,'delete_one_building'])->name('delete_one_building');
Route::get('/buildings/edit_one_building',[\App\Http\Controllers\BuildindingController::class,'edit_one_building'])->name('edit_one_building');

Route::get('/resident/delete_one_resident',[\App\Http\Controllers\BuildindingController::class,'delete_one_resident'])->name('delete_one_resident');
Route::get('/resident/edit_one_resident',[\App\Http\Controllers\BuildindingController::class,'edit_one_resident'])->name('edit_one_resident');


