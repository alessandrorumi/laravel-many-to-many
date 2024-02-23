@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Tipologia e Progetti</h1>
        <div class="row">
            @foreach ($types as $type)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Tipologia: {{ $type->name }}</h3>
                            <ul class="list-group list-group-flush">
                                @foreach ($type->projects as $project)
                                    <li class="list-group-item">
                                        <h5 class="card-subtitle mb-2 text-muted">Progetto: {{ $project->name }}</h5>
                                        <p class="card-text">Descrizione: {{ $project->description }}</p>
                                        <p class="card-text">Autore: {{ $project->author }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
