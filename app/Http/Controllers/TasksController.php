<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Repositories\TasksRepository;
use App\Repositories\ProjectRepository;
use App\Http\Requests\AddRequest;
use App\Http\Requests\UpdateRequest;

class TasksController extends Controller
{
    protected $tasksRepository;
    protected $projectRepository;
    public function __construct(TasksRepository $tasksRepository , ProjectRepository $projectRepository){
        $this->tasksRepository = $tasksRepository;
        $this->projectRepository = $projectRepository;
    }
    public function show(Request $request , $id){
        $tasks = $this->tasksRepository->show($id);
        $projectData = $this->projectRepository->getData();

        if($request->ajax()){
            $query = Task::query();
            $seachQuery = $request->get('searchValue');
            $seachQuery = str_replace(' ','%', $seachQuery);
            $filterName = $request->get('criteria');
            if($seachQuery && $filterName !== 'Filtrer par projet'){
                $query->where('nom','like','%'.$seachQuery. '%')->where('projetId', $filterName)->orWhere('description' , 'like' , '%' . $seachQuery . '%')->paginate(3);
            }
            if($filterName){
                $query->where('projetId' , $filterName);
                $tasks = $query->paginate(3);
            }
            $tasks = $query->paginate(3);
            return view('search' , compact('tasks' ,'projectData'))->render();
            
        }
        $projectId = $id;
        return view('task',compact('tasks' , 'projectId' , 'projectData'))->render();
    }
    public function create(){
        $projectData = $this->projectRepository->getData();
        return view('add' , compact('projectData'));
    }
    public function store(AddRequest $request){
        $validatedData = $request->validated();
        $this->tasksRepository->store($validatedData);
        return redirect()->route('add.task')->with('success' , 'tache a été ajouter avec succés');
    }
    public function edit($id){
        $task = $this->tasksRepository->edit($id);
        $projectData = $this->projectRepository->getData();
        return view('edit' , compact('task' , 'projectData'));
    }
    public function update(UpdateRequest $request , $id){
        $validatedData = $request->validated();
        $task = $this->tasksRepository->update($validatedData , $id);
        return redirect()->route('edit.task' , ['id' => $task->id])->with('success' , 'tache a été modifier avec succés');
    }
    public function destroy($id){
        $this->tasksRepository->destroy($id);
        return redirect()->route('tasks');
    }
}
