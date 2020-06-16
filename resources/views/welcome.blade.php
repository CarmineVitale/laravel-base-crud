<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel and DB</title>
</head>
<body>
    <h1>Migrations</h1>

    <main>
        <h2>I nostri studenti</h2>
        @foreach($students as $student)
            <div class="students">
                <h2>Studente {{ $student->id }}</h2>
                <h4>Nome e cognome: </h4> {{ $student->name }} {{ $student->surname }}
                <h4>Presentazione:</h4> {{ $student->description }}
                <h4>Numero di matricola:</h4> {{ $student->matricola }}
            </div>
        @endforeach
    </main>
</body>
</html>