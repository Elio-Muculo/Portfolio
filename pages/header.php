<?php 

session_start();


?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title><?php echo ucfirst(str_replace("/", "", basename($_SERVER['PHP_SELF'], ".php"))); ?></title>
    </head>
<body>
<div class="wrapper" style="width: 100%">
<nav id="sidebar">
    <div>
        <a href="#" style="background-image: url(images/logo.jpg);"></a>
        <ul>
            <li>
                <a href="index.php">Pagina inicial</a>
            </li>
            <div class="dropdown">
                <a class="dropbtn" href="./add_dados.php">Dados Pessoais</a>
            </div> 
            <div class="dropdown">
                <a class="dropbtn" href="./add_formacao.php">Formação</a>
            </div>
            <div class="dropdown">
                <a class="dropbtn" href="./add_experiencia.php">Experiência profissional</a>
            </div>
            <div class="dropdown">
                <a class="dropbtn" href="./add_habilidades.php">Habilidades</a>
            </div>
            <div class="dropdown">
                <a class="dropbtn" href="./add_artigo.php">Artigos</a>
            </div>
            <div class="dropdown">
                <a class="dropbtn" href="./add_contacto.php">Contacto</a>
            </div>
        </ul>
</div>
</nav>

        