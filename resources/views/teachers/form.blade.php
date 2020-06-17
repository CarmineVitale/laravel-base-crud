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
            <h1>Aggiungi un nuovo insegnante</h1>
            <form action="{{ route('contents.store') }}" method="POST">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" id="nome" name="nome">
                </div> 
                <div class="form-group">
                    <label for="cognome">Cognome</label>
                    <input class="form-control" type="text" id="cognome" name="cognome">
                </div> 
                <div class="form-group">
                    <label for="ruolo">Turno</label>
                    <input class="form-control" type="text" id="ruolo" name="ruolo">
                </div> 
                <div class="form-group">
                    <label for="caratteristiche">Ruolo</label>
                    <input class="form-control" type="text" id="caratteristiche" name="caratteristiche">
                </div> 
                <input type="submit" value="Salva" class="btn btn-success">
            </form>
        </div>
    </main>
@endsection
    