@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Progetti: {{ count($projects) }}</h1>
        <h3><a href="{{ route('project.create') }}">Crea un nuovo progetto</a></h3>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-6 mb-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4>Nome del progetto:</h4>
                            <a class="link-underline link-underline-opacity-0" href="{{ route('project.show', $project->id) }}">
                                <h3>{{ $project->name }}</h3>
                            </a>
                            <p>Autore: <i>{{ $project->author }}</i></p>
                            <p>Tipologia: <span class="badge bg-primary">{{ $project->type->name }}</span></p>
                            <div>Tecnologia utilizzata:</div>
                            @foreach ($project->technologies as $technology)
                                <p class="badge bg-secondary">{{ $technology->name }}</p>
                            @endforeach
                            <div class="img">
                                <img class="w-100" src="{{ asset('storage/' . $project->image) }}" alt="">
                            </div>
                            <div class="btns d-flex justify-content-center mt-3">
                                <a class="btn btn-warning me-3" href="{{ route('project.edit', $project->id) }}">Modifica</a>
                                <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                
                                    @csrf
                                    @method("DELETE")
                
                                    <input class="btn btn-danger" type="submit" value="Rimuovi">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
