<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel and DB</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="nav-brand">
                <h2 class="text-success"> Boolean</h2>
            </div>
            <ul class="navbar-nav ml-auto">
             <li class="nav-item"><a class="nav-link" href=" {{ route('homepage')}}">Gli studenti</a></li>
             <li class="nav-item"><a class="nav-link" href=" {{ route('contents.index')}}">Gli insegnanti</a></li>
             <li class="nav-item"><a class="nav-link" href=" {{ route('contents.create')}}">Aggiungi un nuovo insegnante</a></li>
            </ul>
        </nav>
    </header>