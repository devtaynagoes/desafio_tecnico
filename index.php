<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Tayná Goes" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="date" content="15-01-2025" scheme="DD-MM-YYYY" />
    <title>Página Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <div class="site-identity">
            <a href="#"><img src="./img/logo_horizontal.png" alt=""></a>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>Selecione um Desafio</h1>
<?php
    $desafios = [1, 2, 3, 4, 5];
    for ($i = 0; $i < count($desafios); $i++) :
        $desafio_num = $desafios[$i];
        $link = "./desafio_{$desafio_num}/index.php";
        $nome = "Desafio {$desafio_num}";
?>
            <a href="<?= $link ?>" class="btn"><?= $nome ?></a>
<?php
    endfor;
?>
        </div>
    </main>

    <footer class="footer" role="contentinfo" >
        <div class="social" role="navigation" aria-labelledby="social-heading">
            <h3 id="social-heading" class="sr-only">Follow us on social media</h3>
            <a href="https://www.linkedin.com/in/tayn%C3%A1-goes-a048751a3/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://wa.me/5518988071968" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="mailto:dev.taynagoes@gmail.com"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <p class="copyright">© 2025 Tayná Goes de Sousa</p>
    </footer>

</body>

</html>