<?php

function calcularFactorial($numero) {
    if ($numero < 0) {
        return "No se puede calcular el factorial de números negativos";
    } elseif ($numero == 0 || $numero == 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

// Obtendremos el fatorial de 7
$numero = 7;
$resultado = calcularFactorial($numero);
echo "El factorial de $numero es: $resultado";

?>
