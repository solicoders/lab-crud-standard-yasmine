<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Repositories\TasksRepository;
use App\Http\Requests\AddRequest;
use App\Http\Requests\UpdateRequest;

class TasksController extends Controller
{
    protected $tasksRepository;
    public function __construct(TasksRepository $tasksRepository){
        $this->tasksRepository = $tasksRepository;
    }
    public function index(Request $request){
        $tasks = $this->tasksRepository->index();
        if($request->ajax()){
            $seachQuery = $request->get('searchValue');
            $seachQuery = str_replace(' ','%', $seachQuery);
            $tasks = Task::query()->where('nom','like','%'.$seachQuery. '%')->orWhere('description' , 'like' , '%' . $seachQuery . '%')->paginate(3);
            return view('search' , compact('tasks'))->render();
        }
       
        return view('home',compact('tasks'));
    }
    public function create(){
    $projects = Project::all();
        return view('add' , compact('projects'));
    }
    public function store(AddRequest $request){
        $validatedData = $request->validated();
        $this->tasksRepository->store($validatedData);
        return redirect()->route('add.task')->with('success' , 'tache a été ajouter avec succés');
    }
    public function edit($id){
        $task = $this->tasksRepository->edit($id);
        $projects = Project::all();
        return view('edit' , compact('task' , 'projects'));
    }
    public function update(UpdateRequest $request , $id){
        $validatedData = $request->validated();
        $task = $this->tasksRepository->update($validatedData , $id);
        return redirect()->route('edit.task' , ['id' => $task->id])->with('success' , 'tache a été modifier avec succés');
    }
    public function destroy($id){
        $this->tasksRepository->destroy($id);
        return redirect()->route('home');
    }
}
