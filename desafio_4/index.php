<?php
// Definindo os valores de faturamento por estado
$faturamento = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
];

// Calculando o faturamento total
$faturamento_total = array_sum($faturamento);

// Função para calcular o percentual
function calcular_percentual($valor, $total) {
    return number_format(($valor / $total) * 100, 2, ',', '.');
}

// Gerando os percentuais
$percentuais = array_map(fn($valor) => calcular_percentual($valor, $faturamento_total), $faturamento);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Tayná Goes" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="date" content="15-01-2025" scheme="DD-MM-YYYY" />
    <title>Desafio 4 - Percentual por estado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1>Faturamento percentual mensal por Estado</h1>
        <ul>
<?php foreach ($percentuais as $estado => $percentual): ?>
                <li><strong><?= $estado; ?>:</strong> <?= $percentual; ?>%</li>
<?php endforeach; ?>
        </ul>
    </div>
</body>
</html>