<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
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

Route::get('/tutti/annunci', [AnnouncementController::class, 'showAll'])->name('announcements.showAll');

Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');

Route::get('/category/dettaglio/annuncio/{announcement}', [PageController::class, 'showAnnouncement'])->name('category.single.announcement');

// home revisore
Route::get('revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

// accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.acceptAnnouncement');

// rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.rejectAnnouncement');

// richiedi di diventare revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// rendi un utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');







Route::middleware('auth')->group( function () {

    Route::get('/nuovo/annuncio/', [AnnouncementController::class, 'createAnnouncement'])->name('announcements.create');
});


