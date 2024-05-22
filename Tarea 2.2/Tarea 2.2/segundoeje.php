<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>1037. Juego de letras</h1>

    <table cellspacing="3" cellpading="3">
        <tr>
            <td><strong>Puntos</strong></td> <td>11.95</td> 
            <td><strong>Límite de memria</strong></td> <td>32 MiB</td>
        </tr>
        <tr>
            <td>Límite de tiempo (caso)</td> <td>1s</td> 
            <td>Límite de tiempo (total)</td> <td>1m0s</td>
        </tr>
        <tr>
            <td><strong>Tamaño límite de entrada de (bytes)</strong></td> 
            <td>10 KiB</td>
        </tr>
    </table>

    <h2>Descripción</h2>
    <p>En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su posición en el teclado: las letras Q, A y Z reciben el valor 1, las letras W, S y X reciben el valor 2, y así sucesivamente hasta que las letras O y L reciben el valor 9 y la letra P recibe el valor 0. Una palabra formada por estas letras recibe como valor la suma de los valores de las letras que la forman. Por ejemplo, la palabra UAM recibe como valor 7 + 1 + 7 = 15. Escribe un programa que determine el valor de una palabra.</p>

    <h2>Entrada</h2>
    <p>Una cadena P formada exclusivamente por letras mayúsculas de la A a la Z. La cadena no contendrá eñes, acentos ni ningún otro símbolo. La cadena P medirá entre 1 y 10 letras.</p>

    <h2>Ejemplo</h2>
    <table cellspacing="3" cellpading="3">
        <tr>
            <td>UAM</td> <td>15</td>
        </tr>
    </table>

    <h1>Calcular el valor de la palabra</h1>

    <form method="post">
        <label for="palabra">Ingrese una palabra:</label><br>
        <input type="text" id="palabra" name="palabra" required><br><br>
        <input type="submit" value="Calcular Valor">
    </form>




    <?php
    // Procesar la entrada del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Función para calcular el valor de la palabra
        function calcularValor($palabra) {
            $valorLetra = [
                'QAZ' => 1,
                'WSX' => 2,
                'EDC' => 3,
                'RFV' => 4,
                'TGB' => 5,
                'YHN' => 6,
                'UJM' => 7,
                'IK' => 8,
                'OL' => 9,
                'P' => 0
            ];

            $valorTotal = 0;
            $palabra = strtoupper($palabra);

            for ($i = 0; $i < strlen($palabra); $i++) {
                $letra = $palabra[$i];
                foreach ($valorLetra as $grupo => $valor) {
                    if (strpos($grupo, $letra) !== false) {
                        $valorTotal += $valor;
                        break;
                    }
                }
            }

            return $valorTotal;
        }

        // Obtener la palabra del formulario
        $palabra = $_POST['palabra'];

        // Calcular y mostrar el valor de la palabra
        echo "<p>El valor de la palabra '$palabra' es: " . calcularValor($palabra) . "</p>";
    }
    ?>
</body>
</html>