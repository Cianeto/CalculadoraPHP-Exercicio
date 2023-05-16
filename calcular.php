<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    if ($operacao == "soma") {
        $resultado = $num1 + $num2;
    } elseif ($operacao == "subtracao") {
        $resultado = $num1 - $num2;
    } elseif ($operacao == "multiplicacao") {
        $resultado = $num1 * $num2;
    } elseif ($operacao == "divisao") {
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Erro: divisão por zero";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora - Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <p>O resultado da operação é: <?php echo $resultado; ?></p>
</body>
</html>