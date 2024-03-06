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
        $chapitres =  $this->ChapitresRepository ->paginatedData(4);
    return view ('chapitres.index', compact('chapitres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chapitres = $this->ChapitresRepository->getall(); 
        
        return view('chapitres.create',Compact('chapitres'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $this->ChapitresRepository->store($request->all());
        return redirect()->route('chapitre.index')->with('success', 'Chapitre a été ajouté avec succès.');

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
        $dataToEdit = $this->ChapitresRepository->update($id);
        $dataToEdit->date_debut = Carbon::parse($dataToEdit->date_debut)->format('Y-m-d');
        $dataToEdit->date_de_fin = Carbon::parse($dataToEdit->date_de_fin)->format('Y-m-d');

        return view('chapitres.edit', compact('dataToEdit'));
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
