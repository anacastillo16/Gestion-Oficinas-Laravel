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
        <form action="{{ route('empleados.store') }}" id="formularioCrear" method="POST">
            <h2>Crear Oficina</h2>
            @csrf
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="primerApellido">Primer Apellido: </label>
            <input type="text" name="primerApellido" id="primerApellido">

            <label for="segundoApellido">Segundo Apellido: </label>
            <input type="text" name="segundoApellido" id="segundoApellido">

            <label for="rol">Rol: </label>
            <input type="text" name="rol" id="rol">

            <label for="fechaNacimiento">Fecha Nacimiento: </label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento">

            <label for="dni">DNI: </label>
            <input type="text" name="dni" id="dni">

            <label for="email">Email: </label>
            <input type="email" name="email" id="email">

            <input type="hidden" name="oficina_id" value="{{ $oficina->id }}">

            <button type="submit">Añadir Empleado</button>
        </form>
    </main>
</body>
</html>