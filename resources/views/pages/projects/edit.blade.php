@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Modifica il progetto</h2>
            <div class="row">
                <div class="col-md-6 mb-4 mx-auto">
                    <form action="{{route('project.update', $project->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="title d-flex mb-4">
                            <div class="label w-50">
                                <label for="name">Nome del progetto:</label>
                            </div>
                            <input type="text" name="name" id="name" value="{{ $project->name }}">
                        </div>

                        <div class="desc d-flex mb-4">
                            <div class="label w-50">
                                <label for="description">Descrizione:</label>
                            </div>
                            <div class="text flex-grow-1">
                                <textarea class="w-100" name="description" id="description">{{ $project->description }}</textarea>
                            </div>
                        </div>

                        <div class="author d-flex mb-4">
                            <div class="label w-50">
                                <label for="author">Autore:</label>
                            </div>
                            <input type="text" name="author" id="author" value="{{ $project->author }}">
                        </div>

                        <div class="image d-flex mb-4">
                            <div class="label w-50">
                                <label for="image">Immagine:</label>
                            </div>
                            <input type="file" class="form-control-file" name="image" id="image" accept="image/*">
                        </div>
                        <div class="img">
                            <img class="w-100" src="{{ asset('storage/' . $project->image) }}" alt="">
                        </div>

                        <div class="type d-flex mb-4">
                            <div class="w-50">
                                Tipo di Progetto:
                            </div>
                            <select name="type_id" id="type_id">
                                @foreach ($types as $type)
                                    <option value="{{ $type -> id}}"
                                        @if ($project->type_id == $type->id)
                                            selected
                                        @endif
                                            >{{ $type -> name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="techno mb-4">
                            <h5>Tecnologia:</h5>
                            <div class="row">
                                @foreach ($technologies as $technology)
                                    <div class="col-md-4">
                                        <input 
                                            type="checkbox" 
                                            name="technology_id[]" 
                                            value="{{ $technology->id }}"
                                            @foreach ($project->technologies as $project_technology)
                                                @if ($technology->id == $project_technology->id)
                                                    checked
                                                @endif
                                            @endforeach
                                        >
                                        <label class="checkbox-inline"> {{ $technology->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <input class="btn btn-warning" type="submit" value="Modifica">

                    </form>
                </div>
            </div>
    </div>
@endsection
