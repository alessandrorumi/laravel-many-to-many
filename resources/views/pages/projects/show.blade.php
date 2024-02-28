@extends('layouts.main-layout')

@section('head')
    <title>Show</title>
@endsection

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Progetto n°: {{ $project->id }}</h1>
    <div class="row">
        <div class="col-md-6 mx-auto mb-4">
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>Progetto:</h5>
                    <p>Descrizione: {{ $project->description }}</p>
                    <p>Autore: <i>{{ $project->author }}</i></p>
                    <p>Tipologia: <span class="badge bg-primary">{{ $project->type->name }}</span></p>
                    <div class="img">
                        <img class="w-100" src="{{ asset('storage/' . $project->image) }}" alt="">
                    </div>
                    <div>Tecnologia utilizzata:</div>
                    @foreach ($project->technologies as $technology)
                        <p class="badge bg-secondary">{{ $technology->name }}</p>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection