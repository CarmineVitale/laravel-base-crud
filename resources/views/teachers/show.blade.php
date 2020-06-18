@extends('layout.main')

@section('content')
    <main>
       <div class="container">
        <h1>Dettaglio {{ $content['nome'] }} </h1>
       @if (session('saved')) <div class="alert alert-success">Nuovo insegnante {{ $content['nome'] }} inserito con successo</div> @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Turno</th>
                    <th>Ruolo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $content['nome'] }}</td>
                    <td>{{ $content['cognome'] }}</td>
                    <td>{{ $content['ruolo'] }}</td>
                    <td>{{ $content['caratteristiche'] }}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-success" href="{{ route('contents.index')}}">Torna a tutti gli insegnanti </a>
       </div>
        
    </main>
@endsection
    