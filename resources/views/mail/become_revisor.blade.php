<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div>
        <h1>Un utente ha richiesto di diventare revisore</h1>
        <h2>ecco i suoi dati</h2>
        <p>Nome: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Motivo richiesta: {{ $msg }}</p>
        <p>Se vuoi renderlo revisore clicca qui</p>
        <button>
            <a href="{{ route('make.revisor', $user )}}">Rendi revisore</a>
        </button>
    </div>
</body>
</html>