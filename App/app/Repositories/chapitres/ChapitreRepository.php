<?php

namespace App\Repositories\chapitres;

use App\Models\chapitres\Chapitre;
use App\Repositories\BaseRepository;
use Database\Seeders\chapitres\chapitresSeeders;
use Illuminate\Database\Eloquent\Model;

class  ChapitreRepository extends BaseRepository {
    protected $model;
 function __construct(Chapitre $Chapitre) {
    $this->model = $Chapitre;
}
  
public function searchData($searchdata , $perpage=4){
 
  return $this ->model->where(function($query)use($searchdata){

    $query->where('nom','like','%'.$searchdata.'%');

  }) ->paginate($perpage);

}

public function  getChapitrebyautoformationId($autoformationId){
  return $this->model->where('autoformationId', $autoformationId)->paginate(4);
   
 }

 public function getall(){

  return $this->model->all();
 }

 public function find($id){
  return $this->model->find($id);

 }

 public function paginatedData($perpage = 4) {
  return $this->model->with('chapitre')->paginate($perpage);

 }

}