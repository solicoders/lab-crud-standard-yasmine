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
            $searchQuery = $request->get('searchValue');
            $filterName = $request->get('criteria');
    
            $query = Project::query();
    
            if ($searchQuery) {
                $query->where(function($q) use ($searchQuery) {
                    $q->where('nom', 'like', '%' . $searchQuery . '%')
                      ->orWhere('description', 'like', '%' . $searchQuery . '%');
                });
            }
    
            if ($filterName) {
                $query->where('nom', $filterName);
            }
    
            $projects = $query->paginate(3);
    
            return view('projectSearch', compact('projects'))->render();
        }
        return view('home' , compact('projects' , 'projectData'))->render();
    }
 
}