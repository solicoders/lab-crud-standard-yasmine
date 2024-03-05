<?php

use App\Models\chapitres\Chapitre;
use  App\Repositories\chapitres\ChapitreRepository;
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
    return view('chapitres.index');
});

Route::get('/test/store-chapitre', function () {
    $repository = new ChapitreRepository(new Chapitre);
    $data = [
        'name' => 'yasmine' ,
        'description' => 'nonoooooooooooo', 
        'date_debut' => '2024-03-04 13:11:49',
        'date_de_fin' => '2024-03-04 13:11:49',
        'autoformationId' => 2
    ];

    $insert = $repository->store($data);
    if($insert){
        echo 'Insertion réussie';
    }else{
        echo 'Insertion n\'est pas réussite';
    }
});

Route::get('/test/update-chapitre', function () {
    $repository = new ChapitreRepository(new Chapitre);
    $validatedata = [
        'name' => 'yasmine' ,
        'description' => 'nonoooooooooooo', 
        'date_debut' => '2024-03-04 13:11:49',
        'date_de_fin' => '2024-03-04 13:11:49',
             'autoformationId' => 2
    ];

    $insert = $repository->update($validatedata , 1);
    if($insert){
        echo 'update réussie';
    }else{
        echo 'Insertion n\'est pas réussite';
    }
});

Route::get('/test/{id}', function ($id) {
    $repository = new ChapitreRepository(new Chapitre);
    $delete = $repository->destroy($id);
    if($delete){
        echo 'delete réussie';
    }else{
        echo 'delete n\'est pas réussite';
    }
});


