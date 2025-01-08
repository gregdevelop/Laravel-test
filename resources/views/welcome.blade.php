<?php
$mensaje = "";
$promedio = null;

function calcularPromedio($numeros) {
    if (empty($numeros)) {
        return "Error: El array está vacío.";
    }
    
    // Verifica que todos los elementos sean números
    foreach ($numeros as $numero) {
        if (!is_numeric($numero)) {
            return "Error: Todos los valores deben ser números.";
        }
    }

    $suma = array_sum($numeros);
    return $suma / count($numeros);
}

// Verifica si el formulario fue enviado
if (isset($_GET['numeros'])) {

    $numeros = $_GET['numeros'];

    // Convierte la cadena de números en un array
    $arrayNumeros = array_map('trim', explode(',', $numeros));

    // Calcula el promedio si el array no está vacío
    if (count($arrayNumeros) > 0) {
        $promedio = calcularPromedio($arrayNumeros);
    } else {
        $mensaje = "Error: El array está vacío.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calcular Promedio</title>
        <script>

            // Función para validar los números ingresados
            function validarNumeros() {
                const inputNumeros = document.getElementById("numeros");
                const submitButton = document.getElementById("calcular");
                const numeros = inputNumeros.value.trim();

                // Verifica que los valores estén separados por comas y que todos sean números
                const regex = /^(\d+(\.\d+)?)(,\d+(\.\d+)?)*$/;

                if (regex.test(numeros)) {
                    submitButton.disabled = false; // Habilita el botón si todo es válido
                } else {
                    submitButton.disabled = true; // Deshabilita el botón si hay un error
                }
            }

            // Verifica si el promedio ha sido calculado y refresca la página
            <?php if ($promedio !== null && is_numeric($promedio)): ?>
                window.onload = function() {
                   
                };
            <?php endif; ?>

        </script>
    </head>
    <body>
        <h1>Calcular Promedio de Números</h1>

        <!-- Formulario para ingresar los números -->
        <form method="GET" action="">
            <label for="numeros">Ingrese los números (separados por coma):</label>
            <input type="text" id="numeros" name="numeros" placeholder="Ejemplo: 1,2,3,4,5" required oninput="validarNumeros()">
            <button type="submit" id="calcular" disabled>Calcular Promedio</button>
        </form>

        <!-- Mensaje de error si el array está vacío o si los valores no son numéricos -->
        <?php if ($mensaje): ?>
            <p style="color: red;"><?php echo $mensaje; ?></p>
        <?php endif; ?>

        <!-- Muestra el promedio si se calcula correctamente -->
        <?php if ($promedio !== null && is_numeric($promedio)): ?>
            <h2>Promedio: <?php echo $promedio; ?></h2>
        <?php endif; ?>
    </body>
    
</html>