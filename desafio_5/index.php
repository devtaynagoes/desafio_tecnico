<?php
// Função para inverter a string
function inverter_string($str) {
    $resultado = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $resultado .= $str[$i];
    }
    return $resultado;
}
$saida = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST['entrada'];
    $saida = inverter_string($entrada);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Tayná Goes" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="date" content="15-01-2025" scheme="DD-MM-YYYY" />
    <title>Desafio 5 - Inverter String</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1>Inverter String</h1>
        <form method="POST">
            <input type="text" name="entrada" placeholder="Digite a string" value="<?= isset($entrada) ? htmlspecialchars($entrada) : '' ?>">
            <button type="submit">Inverter</button>
        </form>
<?php if ($saida): ?>
            <p><strong>String invertida:</strong> <?= htmlspecialchars($saida) ?></p>
<?php endif; ?>
    </div>
</body>
</html>
