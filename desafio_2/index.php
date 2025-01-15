<?php
function isFibonacci($number) {
    // Caso base para 0 ou 1
    if ($number == 0 || $number == 1) {
        return [
            'pertence' => true,
            'soma' => $number,
            'resposta' => "O número $number é um dos dois primeiros números na sequência de Fibonacci (0 ou 1)."
        ];
    }
    $previousNumber = 0;
    $currentNumber = 1;
    $i = 2;

    while ($currentNumber < $number) {
        // Fn = Fn-1 + Fn-2
        $nextNumber = $previousNumber + $currentNumber;
        $previousNumber = $currentNumber;
        $currentNumber = $nextNumber;
        $i++;
    }

    if ($currentNumber == $number) {
        return [
            'pertence' => true,
            'soma' => $previousNumber + $currentNumber,
            'resposta' => "O número $number pertence à sequência de Fibonacci. Ele foi gerado pela soma de $previousNumber (anterior) + $currentNumber (atual) = $number."
        ];
    } else {
        return [
            'pertence' => false,
            'soma' => $previousNumber + $currentNumber,
            'resposta' => "O número $number NÃO pertence à sequência de Fibonacci. Ele não pode ser gerado pelo soma de $previousNumber (anterior) + $currentNumber (atual)."
        ];
    }
}
$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);

    if ($number === false) {
        $error = "Digite um número válido.";
    } else {
        $result = isFibonacci($number);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Tayná Goes" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="date" content="15-01-2025" scheme="DD-MM-YYYY" />
    <title>Desafio 2 - Sequência de Fibonacci</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1>Verifique se um número pertence à sequência de Fibonacci</h1>
        <p>A sequência de Fibonacci é uma sequência numérica infinita em que cada termo a partir do terceiro é a soma dos dois termos anteriores.</p>
        <span>Fórmula = Fn = Fn-1 + Fn-2</span> <br><br>
        <span>Fn = é um termo qualquer, ou, enésimo termo. </span> <br>
        <span>F n - 1 = é o termo anterior ao que Fn, é o antecedente. </span> <br>
        <span>F n - 2 = é o temo anterior à Fn-1. Ou seja, duas posições atrás de Fn.</span> <br>

<?php if ($error): ?>
        <div class="alert error"><?= $error; ?></div>
<?php elseif ($result): ?>
        <div class="alert success"><?=  $result['resposta']; ?></div>
        <p><strong>soma dos dois números anteriores:</strong> <?= $result['soma']; ?></p>
<?php endif; ?>

        <form method="POST">
            <label for="number">Digite um número:</label>
            <input type="number" name="number" id="number" required>
            <button type="submit">Verificar</button>
        </form>
    </div>
</body>
</html>