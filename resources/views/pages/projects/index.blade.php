@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Progetti</h1>
        <h3><a href="{{ route('project.create') }}">Crea un nuovo progetto</a></h3>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-6 mb-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4>Nome del progetto:</h4>
                            <h3>{{ $project->name }}</h3>
                            <p>Descrizione: {{ $project->description }}</p>
                            <p>Autore: <i>{{ $project->author }}</i></p>
                            <p>Tipologia: <span class="badge bg-primary">{{ $project->type->name }}</span></p>
                            <div>Tecnologia utilizzata:</div>
                            @foreach ($project->technologies as $technology)
                                <p class="badge bg-secondary">{{ $technology->name }}</p>
                            @endforeach
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
