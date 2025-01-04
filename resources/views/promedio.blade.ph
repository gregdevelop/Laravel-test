<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Promedio</title>
</head>
<body>
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; text-align: center;">
        <h1>Calcular Promedio</h1>

        <!-- Formulario para ingresar los números -->
        <form action="{{ url('calcular-promedio') }}" method="POST">
            @csrf
            <label for="numeros">Ingresa los números (separados por coma):</label>
            <input type="text" id="numeros" name="numeros" placeholder="Ejemplo: 10, 20, 30" required>
            <button type="submit">Calcular</button>
        </form>

        <!-- Mostrar el resultado o mensaje de error -->
        @if(isset($promedio))
            <h2>El promedio es: {{ $promedio }}</h2>
        @elseif(isset($error))
            <h2 style="color: red;">{{ $error }}</h2>
        @endif
    </div>
</body>
</html>
