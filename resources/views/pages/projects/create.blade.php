@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Creazione di un nuovo progetto</h2>
            <div class="row">
                <div class="col-md-6 mb-4 mx-auto">
                    <form action="{{ route('project.store') }}" method="post">
                        @csrf
                        @method('POST')

                        <div class="title d-flex mb-4">
                            <div class="label w-50">
                                <label for="name">Nome del progetto:</label>
                            </div>
                            <input type="text" name="name" id="name">
                        </div>

                        <div class="desc d-flex mb-4">
                            <div class="label w-50">
                                <label for="description">Descrizione:</label>
                            </div>
                            <div class="text flex-grow-1">
                                <textarea class="w-100" name="description" id="description"></textarea>
                            </div>
                        </div>

                        <div class="author d-flex mb-4">
                            <div class="label w-50">
                                <label for="author">Autore:</label>
                            </div>
                            <input type="text" name="author" id="author">
                        </div>

                        <div class="type d-flex mb-4">
                            <div class="w-50">
                                Tipo di Progetto:
                            </div>
                            <select name="type_id" id="type_id">
                                @foreach ($types as $type)
                                    <option value="{{ $type -> id}}">{{ $type -> name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="techno mb-4">
                            <h5>Tecnologia:</h5>
                            <div class="row">
                                @foreach ($technologies as $technology)
                                    <div class="col-md-4">
                                        <label class="checkbox-inline"> {{ $technology->name }}</label>
                                        <input type="checkbox" 
                                               name="technology_id[]" 
                                               value="{{ $technology->id }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <input class="btn btn-success" type="submit" value="Crea">

                    </form>
                </div>
            </div>
    </div>
@endsection
