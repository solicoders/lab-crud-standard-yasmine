<?php



use App\Http\Controllers\chapitres\ChapitreController;

use Illuminate\Support\Facades\Route;


Route::resource('chapitres' , ChapitreController::class);


Route::get('chapitres/show/{id}', [ChapitreController::class, 'show'])->name('chapitres.show');