<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>

 <h1 >11823. Evaluando Una Función Rara </h1>
 <table cellspacing="3" cellpading="3">
<tr>
<td><strong>Puntos</strong></td> <td> 11.95</td> 
<td><strong>Límite de memria</strong></td> <td> 32 MiB</td>
</tr>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td> <td> 1s</td> 
<td><strong>Límite de tiempo (total)</strong></td> <td>1m0s</td>
</tr>
<tr>
<td><strong>Tamaño limite de entrada de (bytes)</strong></td> 
<td>10 <br> KiB</td>
</tr>
</table>
 
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<h2>Descripcion</h2>
<p>Evaluar de forma correcta \(f(x)  \begin{cases}\end{cases} \)
dado el valor de x.
</p>

<p> \( f(x) = \begin{cases} x^2 - x, & \text{para } x < 0 \\ -x^2, & \text{para } x \geq 0 \end{cases} \) </p>

<h2>Entrada</h2>
Un entero -100 <= x <= 100m, el valor a Utiliza para evaluar  \(f(x)  \begin{cases}\end{cases} \)

<h2>Salida</h2>
<p>El resultado de \(f(x)  \begin{cases}\end{cases} \)</p>
<h2>Ejemplo</h2>
<h2>Entrada Salida</h2>
<table cellpading="3" cellspadding="3">
    <tr>
        <td>-78</td> <td>6162</td>
    </tr>
    <tr>
    <td>28</td> <td>-700</td>
    </tr>
</table>
<?php

function evaluarFuncion($x) {
    // Punto dado
    $x1 = -78;
    $y1 = 6162;
    
    // Calculamos la pendiente de la recta
    $m = 0; // Ya que es una función constante
    
    // Evaluamos la función lineal para el valor dado de x
    $resultado = $m * ($x - $x1) + $y1;
    return $resultado;
}

// Evaluamos la función para x = -78
$resultado = evaluarFuncion(-78);

// Imprimimos el resultado
echo "Resultado de la evaluación para x = -78: $resultado";

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Valor de x: <input type="text" name="x"><br><br>
    <input type="submit" value="Evaluar">
</form>

</body>
</html>