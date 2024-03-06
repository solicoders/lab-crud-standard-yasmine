<?php



use App\Http\Controllers\chapitres\ChapitreController;

use Illuminate\Support\Facades\Route;


Route::resource('chapitres' , ChapitreController::class);
Route::get('export', [ChapitreController::class, 'export'])->name('chapitres.export');
Route::post('import', [ChapitreController::class, 'import'])->name('chapitres.import');