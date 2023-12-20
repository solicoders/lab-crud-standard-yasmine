<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository {
protected $model ;

public function __construct(Model $model){
    $this->model = $model;
}
abstract public function getFieldData():array;
abstract public function model():string;

public function index(){
    return $this->model->paginate(3);
}
public function show($id){
   return $this->model->where('projetId' , $id)->paginate(3);
}
public function getData(){
    return $this->model->select('id', 'nom')->get();
}
public function store(array $validatedData){
    $this->model->create($validatedData);
}
public function edit($id){
    $task = $this->model->findOrFail($id);
    return $task;
}
public function update(array $validatedData , $id){
    $task = $this->model->findOrFail($id);
    $task->update($validatedData);
    return $task;
}
public function destroy($id){
    $task = $this->model->findOrFail($id);
    $task->delete();
}
}