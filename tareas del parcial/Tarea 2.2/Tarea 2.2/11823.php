<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <label for="valor_x">Ingrese un valor para x:</label>
        <input type="number" id="valor_x" name="x" value="<?php echo isset($_GET['x']) ? $_GET['x'] : ''; ?>">
        <button type="submit">Evaluar</button>
    </form>

    <p>Resultado: <?php echo isset($_GET['x']) ? evaluarFuncion($_GET['x']) : ''; ?></p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="palabra">Ingrese una palabra:</label>
        <input type="text" id="palabra" name="palabra">
        <button type="submit">Calcular</button>
    </form>

    <p>Valor de la palabra: <?php echo isset($_POST['palabra']) ? calcularValorPalabra($_POST['palabra']) : ''; ?></p>

    <?php
    function evaluarFuncion($x) {
        if ($x <= 0) {
            // Caso para x <= 0
            return $x * $x - $x;
        } elseif ($x > 0 && is_int($x)) {
            // Caso para x > 0 y x es un entero
            return -$x + 3 * $x;
        } else {
            // Caso para -100 < x < 100
            return -100;
        }
    }

    function calcularValorPalabra($palabra) {
        $valor_letras = [
            'Q' => 10, 'A' => 10, 'Z' => 10,
            'W' => 9, 'S' => 9, 'X' => 9,
            'E' => 8, 'D' => 8, 'C' => 8,
            'R' => 7, 'F' => 7, 'V' => 7, 'T' => 7, 'G' => 7, 'B' => 7,
            'Y' => 6, 'H' => 6, 'N' => 6, 'U' => 6, 'J' => 6, 'M' => 6,
            'I' => 5, 'K' => 5,
            'O' => 4, 'L' => 4,
            'P' => 3
        ];

        $valor_total = 0;
        $palabra = str_split($palabra);

        foreach ($palabra as $letra) {
            $valor_total += $valor_letras[$letra] ?? 0; // Handle undefined letters
        }

        return $valor_total;
    }
    ?>
</body>
</html>
