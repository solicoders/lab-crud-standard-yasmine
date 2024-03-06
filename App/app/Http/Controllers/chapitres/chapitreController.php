<?php

namespace App\Http\Controllers\chapitres;
use App\Http\Controllers\Controller;
use App\Repositories\chapitres\ChapitreRepository;
use App\Repositories\autoformations\AutoformationRepository;

use Carbon\Carbon;
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

     public function index()
    {
        $chapitres =  $this->ChapitresRepository->paginatedData(4);
        return view ('chapitres.index', compact('chapitres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autoformations= $this->AutoformationsRepository->getall();
        $chapitres = $this->ChapitresRepository->getall(); 
        
        return view('chapitres.create',Compact('chapitres','autoformations')) ;
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $this->ChapitresRepository->store($request->all());
        return redirect()->route('chapitres.index')->with('success', 'Chapitre a été ajouté avec succès.');

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
        $autoformations = $this->AutoformationsRepository->getAll();
        $chapitres = $this->ChapitresRepository->find($id);
        $chapitres->date_debut = Carbon::parse( $chapitres->date_debut)->format('Y-m-d');
        $chapitres->date_de_fin = Carbon::parse( $chapitres->date_de_fin)->format('Y-m-d');
        return view('chapitres.edit', compact('chapitres', 'autoformations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $this->ChapitresRepository->update($request->all(),$id);
        return redirect()->route('chapitres.index')->with('success', 'Question modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
