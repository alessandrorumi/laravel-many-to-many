@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Creazione di un nuovo progetto</h1>
            <div class="row">
                <div class="col-md-6 mb-4 mx-auto">
                    <form action="#" method="post">
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
                            <input type="text" name="description" id="description">
                        </div>

                        <div class="author d-flex mb-4">
                            <div class="label w-50">
                                <label for="author">Autore:</label>
                            </div>
                            <input type="text" name="author" id="author">
                        </div>
                        <input class="btn btn-success" type="submit" value="Crea">
                    </form>
                </div>
            </div>
    </div>
@endsection
