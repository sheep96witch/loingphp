


<form method="post"> 
    <label for="x">Valor de x:</label><br>
    <input type="text" id="x" name="x"><br>
    <label for="y">Valor de y:</label><br>
    <input type="text" id="y" name="y"><br>
    <label for="z">Valor de z:</label><br>
    <input type="text" id="z" name="z"><br><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    function f($a) {
        return 4 * pow($a, 3) + g(2 * $a, -3 * $a);
    }

    function g($b, $c) {
        return (7 * $b - 3) % (pow($c, 2) + 1);
    }

    function h($x, $y, $z) {
        return f($x / $y) + 3 * g($z / $y, $x);
    }

   
    $x = isset($_POST['x']) ? (int)$_POST['x'] : 0;
    $y = isset($_POST['y']) ? (int)$_POST['y'] : 0;
    $z = isset($_POST['z']) ? (int)$_POST['z'] : 0;

    $resultado = h($x, $y, $z);

    
    echo "El resultado de h(x, y, z) es: $resultado";
}
?>