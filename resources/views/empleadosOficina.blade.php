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
    
    <main id="verEmpleados">
        <a href="{{ route('empleados.create',  ['id' => $oficina->id]) }}" id="botonCrear">Añadir Empleado </a>
        <h2>Empleados de la oficina {{ $oficina->nombre }}</h2>
        <ul>
            @foreach($oficina->empleados as $empleado)
                <li><a href="{{ route('empleados.show', $empleado->id) }}">{{ $empleado->nombre }}</a></li>
            @endforeach
        </ul>
    </main>
</body>
</html>