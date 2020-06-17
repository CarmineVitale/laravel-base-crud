@extends('layout.main')

@section('content')
    <main>
       <div class="container">
        <h2 class="mb-5 text-center">I nostri Insegnanti</h2>
        
        <table class="table">
            <thead>
                <tr class="text-primary">
                    <th>Nome</th>
                    <th>Turno</th>
                    <th>Ruolo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr> 
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <td> {{ $teacher->nome}} {{ $teacher->cognome}}</td>
                    <td> {{ $teacher->ruolo}}</td>
                    <td> {{ $teacher->caratteristiche}}</td>
                    <td><a href="{{ route('contents.show', $teacher->id) }}">SHOW</a></td>
                    <td>UPDATE</td>
                    <td>DELETE</td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
        
    </main>
@endsection
    