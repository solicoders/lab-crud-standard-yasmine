@extends('layouts.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Liste des châpitres

                    </h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a href="{{ route('chapitres.create') }}" class="btn btn-info">
                            <i class="fas fa-plus"></i> Nouveau chapitre
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" id='close' class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('success') }}.
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header col-md-12">
                            <div class="d-flex justify-content-between">
                        
                                <div class="dropdown input-group">
                                    <div class="btn-group">
                                        <button class="btn btn-default mr-3 dropdown-toggle" type="button" id="autoformationId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-filter text-dark pr-2 border-right"></i>
                                            Filter by AutoFormation
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="autoformationId">
                                            @foreach($autoformations as $autoformation)
                                            <a class="dropdown-item" href="chapitres">{{ $autoformation->name }}</a>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>


                                <div class=" p-0">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="search-input" id="search-input" class="form-control"
                                            placeholder="Recherche">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <div class="card-body table-responsive p-0" style="overflow-x: auto;">
                                <table class="table table-striped text-nowrap table-tasks">
                                    <thead>
                                        <tr>
                                            <th>Nom de chapitre</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($chapitres as $chapitre)
                                        <tr>
                                            <td>{{ $chapitre->name }}</td>
                                            <td>{{ Str::limit($chapitre->description, 30) }}</td>

                                            <td class="d-flex">
                                                <a href="{{ route('chapitres.show',$chapitre->id) }}"
                                                    class="btn btn-sm btn-default mx-2">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('chapitres.edit',$chapitre->id) }}"
                                                    class="btn btn-sm btn-default mx-2">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form action="{{ route('chapitres.destroy', $chapitre->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="3" class="text-center">Aucune tâche trouvée.</td>
                                        </tr>
                                        @endforelse

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="pagination m-0 float-right">
                                                    {{ $chapitres->links() }}
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <input type="hidden" id='page' value="1">
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id='page' value="1">
    </section>
@endsection