@extends('layout.main')

@section('content')

    <main>
       <div class="container">
        @if (session('deleted')) <div class="alert alert-success">L'insegnante è stato cancellato con successo</div> @endif
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
                    <td><a class="btn btn-primary" href="{{ route('contents.show', $teacher->id) }}">SHOW</a></td>
                    <td><a class="btn btn-success" href="{{ route('contents.edit', $teacher->id) }}">EDIT</a></td>
                    <td>
                        <form action="{{ route('contents.destroy', $teacher->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
        
    </main>
@endsection
    