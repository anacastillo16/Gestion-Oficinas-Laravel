<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar empleado</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
        <h1>Empresa</h1>
        <nav>
            <a href="">Empleados</a>
        </nav>
    </header>
    
    <main id="mainCrear">
        <form action="{{route('empleados.update', $empleado->id)}}" method="post">
            <h2>Crear Oficina</h2>
            @csrf
            @method('put')
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="{{$empleado->nombre}}">

            <label for="primerApellido">Primer Apellido: </label>
            <input type="text" name="primerApellido" id="primerApellido" value="{{$empleado->primerApellido}}">

            <label for="segundoApellido">Segundo Apellido: </label>
            <input type="text" name="segundoApellido" id="segundoApellido" value="{{$empleado->segundoApellido}}">

            <label for="rol">Rol: </label>
            <input type="text" name="rol" id="rol" value="{{$empleado->rol}}">

            <label for="fechaNacimiento">Fecha Nacimiento: </label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="{{$empleado->fechaNacimiento}}">

            <label for="dni">DNI: </label>
            <input type="text" name="dni" id="dni" value="{{$empleado->dni}}">

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" value="{{$empleado->email}}">

            <input type="hidden" name="oficina_id" value="{{ $oficina->id }}">

            <button type="submit">Actualizar Empleado</button>
        </form>
    </main>
</body>
</html>