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
}