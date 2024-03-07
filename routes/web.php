<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'home'])->name('home');
Route::get('/categoria/{category}', [PageController::class, 'categoryShow'])->name('category.show');



Route::middleware('auth')->group( function () {

    Route::get('/nuovo/annuncio',[AnnouncementController::class, 'createAnnouncement'])->name('announcements.create');
});
