<?php

namespace App\Repositories\autoformations;

use App\Models\autoformations\AutoFormation;
use App\Repositories\BaseRepository;
use Database\Seeders\autoformations;
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