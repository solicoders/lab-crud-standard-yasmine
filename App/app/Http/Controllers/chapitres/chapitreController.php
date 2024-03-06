<?php

namespace App\Http\Controllers\chapitres;
use App\Http\Controllers\Controller;
use App\Repositories\chapitres\ChapitreRepository;
use App\Repositories\autoformations\AutoformationRepository;
use App\Http\Requests\chapitres\chapitreRequest;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $ChapitresRepository;
     protected $AutoformationsRepository;
     public function __construct(ChapitreRepository $ChapitresRepository, AutoformationRepository $AutoformationsRepository ){
         $this->ChapitresRepository = $ChapitresRepository;
         $this->AutoformationsRepository = $AutoformationsRepository;
     }

     public function index(Request $request)
    {

        if ($request->ajax()) {
            $searchQuery = $request->get('searchValue');
            $searchQuery = str_replace(' ', '%', $searchQuery);

            $Chapitres = $this->ChapitresRepository->searchData($searchQuery);
            if (!$Chapitres -> count()) {
                return 'false' ; 
            }
            return view('taches.search', compact('Tasks'))->render();
        } 
        $autoformations = $this->AutoformationsRepository->index();
    
       
        $projetId= $request ->projetId ;

        if($projetId) {
            $project = $this->AutoformationsRepository->find($projetId);
            $Tasks = $this->ChapitresRepository->getTaskbyprojetId($projetId);
            return view("Taches.index",Compact('Tasks','projects', 'project'));
            // dd($tasks);
        }
        $Tasks = $this->ChapitresRepository->index();
        $task = $Tasks->first();
        $project = $this->AutoformationsRepository->find($task->projetId);
        return view("Taches.index",Compact('Tasks', 'projects', 'project'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('GestionAutoformations.autoformations.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($data)
    {
        
        $Chapitre = $this->ChapitreRepository->create($data);
        return view('GestionAutoformations.autoformations.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
