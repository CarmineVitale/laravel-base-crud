@extends('layout.main')

@section('content')
    <main>
        @if ($errors->any()) 
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="container">
            <h1>Modifica insegnante</h1>
            <form action="{{ route('contents.update', $content->id) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" id="nome" name="nome" value="{{ old('nome', $content->nome)}}">
                </div> 
                <div class="form-group">
                    <label for="cognome">Cognome</label>
                    <input class="form-control" type="text" id="cognome" name="cognome" value="{{ old('cognome', $content->cognome)}}">
                </div> 
                <div class="form-group">
                    <label for="ruolo">Turno</label>
                    <input class="form-control" type="text" id="ruolo" name="ruolo" value="{{ old('ruolo', $content->ruolo)}}">
                </div> 
                <div class="form-group">
                    <label for="caratteristiche">Ruolo</label>
                    <input class="form-control" type="text" id="caratteristiche" name="caratteristiche" value="{{ old('caratteristiche', $content->caratteristiche)}}">
                </div> 
                <input type="submit" value="Modifica" class="btn btn-success">
            </form>
        </div>
    </main>
@endsection