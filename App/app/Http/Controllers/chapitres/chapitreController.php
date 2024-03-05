<?php

namespace App\Http\Controllers\chapitres;
use App\Http\Controllers\Controller;
use App\Repositories\autoformations\ChapitreRepository;
use App\Repositories\autoformations\AutoformationRepository;
use App\Http\Requests\chapitres\chapitreRequest;
use Illuminate\Http\Request;

class chapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $chapitreRepository ;
    public function __construct(ChapitreRepository $chapitreRepository ) {
        $this->ChapitreRepository = $ChapitreRepository;
    }

    public function index()
    {
        //
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
