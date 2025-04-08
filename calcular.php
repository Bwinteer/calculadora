<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = floatval($_POST["num1"] ?? 0);
    $num2 = floatval($_POST["num2"] ?? 0);
    $operador = $_POST["operador"] ?? '+';

    $resultado = 0;

    switch ($operador) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
            $resultado = $num2 != 0 ? $num1 / $num2 : "Erro: divisão por zero";
            break;
        default:
            $resultado = "Operador inválido";
    }

    echo $resultado;
}
?>
