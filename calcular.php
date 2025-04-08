<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['operador'];
    $resultado = '';

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
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = 'Erro: Divisão por zero';
            }
            break;
        default:
            $resultado = 'Operação inválida';
    }

    echo "<h2>Resultado: $resultado</h2>";
    echo '<a href="index.html">Voltar</a>';
} else {
    echo "Acesso inválido.";
}
?>
