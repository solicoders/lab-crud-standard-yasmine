<?php



use App\Http\Controllers\chapitres;

use Illuminate\Support\Facades\Route;


Route::resource('projets' , projetController::class);
Route::get('export', [projetController::class, 'export'])->name('projets.export');
Route::post('import', [projetController::class, 'import'])->name('projets.import');