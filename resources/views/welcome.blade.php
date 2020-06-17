@extends('layout.main')

@section('content')
    <main>
       <div class="container">
        <h2 class="mb-5 text-center">I nostri studenti</h2>
        
        <table class="table">
            <thead>
                <tr class="text-primary">
                    <th>Matricola</th>
                    <th>Nome</th>
                    <th>Descrizione studente</th>
                </tr> 
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->matricola }}</td>
                    <td>{{ $student->name }} {{ $student->surname }}</td>
                    <td>{{ $student->description }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
        
    </main>
@endsection
    