@extends('layouts.layout')
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Détails du chapitre</h1>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{route('chapitres.index' , $chapitres->id)}}" class="btn btn-default float-right"><i ></i> Retour</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="col-sm-12">
                                    <label for="nom">Nom:</label>
                                    <p>{{$chapitres->name}}</p>
                                </div>

                                <!-- Description Field -->
                                <div class="col-sm-12">
                                    <label for="description">Description:</label>
                                    <p>{{$chapitres->description}}</p>
                                </div>

                                <!-- Description Field -->
                                <div class="col-sm-12">
                                    <label for="description">Date:</label>
                                    <p>Date de début: {{$chapitres->date_debut}}</p>
                                    <p>Date de fin: {{$chapitres->date_de_fin}}</p>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
