<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Oficina</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Empresa</h1>
        <nav>
            <a href="{{ route('oficinas.index') }}">Volver a indice</a>
        </nav>
    </header>
    
    <main id="mainCrear">
        <form action="{{ route('oficinas.store') }}" id="formularioCrear" method="POST">
            <h2>Crear Oficina</h2>
            @csrf
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="direccion">Dirección: </label>
            <input type="text" name="direccion" id="direccion">
            <button type="submit">Crear Oficina</button>
        </form>
    </main>
</body>
</html>