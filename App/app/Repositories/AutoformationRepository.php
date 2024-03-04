<?php

namespace App\Repositories\Autofromations;

use App\Models\AutoFormation;
use App\Repository\Repositories\BaseRepository;
use Database\Seeders\Autoformations;
use Illuminate\Database\Eloquent\Model;

class  AutoformationRepository extends BaseRepository {
    protected $model;

 function __construct(AutoFormation $Autoformations) {
    $this->model = $Autoformations;
}
  
public function searchData($searchdata , $perpage=4){
 
  return $this ->model->where(function($query)use($searchdata){

    $query->where('nom','like','%'.$searchdata.'%');

  }) ->paginate($perpage);

}
}