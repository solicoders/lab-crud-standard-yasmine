<?php

namespace App\Repository\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class  BaseRepository {
    protected $model;
   
  public function __construct(Model $model) {
    $this->model  = $model;
  }
 
  public function store (array $validatedata){
    return $this ->model->create($validatedata);
  }

  public function update($validatedata){
    return $this->model->update($validatedata) ;
  }

  public function paginatedData($perpage){
     return $this ->model->paginate($perpage);
  }
   
  public function destroy($record){
   
    $todestroy =  $this->model->find( $record->id);
    return $todestroy -> delete();

  }

}