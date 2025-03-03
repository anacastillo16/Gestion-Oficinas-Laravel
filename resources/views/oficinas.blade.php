<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficinas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Empresa</h1>
        <nav>
            <a href="">Empleados</a>
        </nav>
    </header>

    <main id="mainIndex">
        <a href="{{ route('oficinas.create') }}" id="botonCrear">Crear Oficina</a>
        <h2>Oficinas</h2>
        <ul>
            @foreach($oficinas as $oficina)
                <li><a href="{{ route('oficinas.show', $oficina->id) }}">{{ $oficina->nombre }}</a></li>
            @endforeach
        </ul>
    </main>
</body>
</html>