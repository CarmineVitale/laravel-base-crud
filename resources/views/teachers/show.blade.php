@extends('layout.main')

@section('content')
    <main>
       <div class="container">
        <h1>Dettaglio {{ $content['nome'] }} </h1>
        <p>{{ $content['nome'] }} {{ $content['cognome'] }} è l' {{ $content['ruolo']}} come {{ $content['caratteristiche'] }}. </p>
       </div>
        
    </main>
@endsection
    