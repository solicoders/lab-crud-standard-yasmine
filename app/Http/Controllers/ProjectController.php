<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    protected $projectRepository ;
    public function __construct(ProjectRepository $projectRepository){
        $this->projectRepository = $projectRepository;
    }
    public function index(Request $request){
        $projects = $this->projectRepository->index();
        $projectData = $this->projectRepository->getData();

        if($request->ajax()){
            $query = Project::query();
            $seachQuery = $request->get('searchValue');
            $filterName = $request->get('criteria');
            $seachQuery = str_replace(' ','%', $seachQuery);
            if($seachQuery){

                $query->where('nom','like','%'.$seachQuery. '%')->orWhere('description' , 'like' , '%' . $seachQuery . '%')->paginate(3);
            }
            if($filterName){
                $query->where('nom' , $filterName );
            }
            $projects = $query->paginate(3);
                return view('projectSearch', compact('projects'))->render();

        }
        return view('home' , compact('projects' , 'projectData'))->render();
    }
 
}