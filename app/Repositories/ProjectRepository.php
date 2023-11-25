<?php

namespace App\Repositories;

use App\Models\Project;
use App\Repositories\BaseRepository;

abstract class ProjectRepository extends BaseRepository {
    public function __construct(Project $project){
        $this->model = $project;
    }
    public function model():string{
        return Project::class;
    }
}