<?php session_start(); 

include_once "../config/DB.php";


$dados_pessoais = read("SELECT * FROM dados_pessoais WHERE id = :id", ['id' => 1]);
$formacao = read("SELECT * FROM formacao");
$experiencia = read("SELECT * FROM exp_prof");
$habilidades = read("SELECT * FROM habilidades");
$contactos = read("SELECT * FROM contacto");
$artigos = read("SELECT * FROM artigos");
$ano_nascimento = explode("-", $dados_pessoais[0]['data_nascimento']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV MUCULO</title>
</head>

<style>
    .line {
        height: 2px;
        width: 100%;
        background-color: #4c2d45;
        margin-top: 0;
    }
</style>

<body>
    
<div style="display: flex;
    flex-direction: row;
        justify-content: space-around;
        align-items: center;
        width: 100%; box-shadow: 0px 0px 15px 8px rgba(186,186,186,0.85);
        background-color: #7f56fd;
        padding: 15px 10px;
        color: #fff;
        font-size: 24px">
    <h5>CV ELIO MUCULO - <?= date("Y")?> </h5>
</div>


<h1 style="text-align: center; margin: 26px 0;">CURRICULUM VITAE</h1>

<h4 style="margin-top: 36px;">DADOS PESSOAIS</h4>
<hr class="line">
<p style="line-height: 1.6;"><?= $dados_pessoais[0]['descricao'];?></p>


<h4 style="margin-top: 36px;">FORMAÇÃO ACADEMICA</h4>
<hr class="line">
<?php 
foreach ($formacao as $key => $f) { ?>
    <?= getYear($f['inicio']) ?> - <?= $f['tipo'] ?>  - <?= $f['instituicao_ensino']?> . <br> <br>
<?php }
?>


<h4 style="margin-top: 36px;">HABILIDADES</h4>
<hr class="line">
<?php 
foreach ($habilidades as $key => $f) { ?>
    <?= $f['habilidade'] ?> <br> <br>
<?php }
?>

<h4 style="margin-top: 36px;">EXPERIÊNCIA PROFISSIONAL</h4>
<hr class="line">
<?php 
foreach ($experiencia as $key => $f) { ?>
    <h4><?= getYear($f['fim']) ?> - <?= $f['organizacao'] ?></h4> 
    <?= $f['cargo'] ?> - <?= $f['descricao']?> <br> <br> 
<?php }
?>

<h4 style="margin-top: 36px;">CONTACTOS</h4>
<hr class="line">
<?php 
foreach ($contactos as $key => $f) { ?>
    <h4>Telefone: <?= $f['telefone'] ?></h4> 
    <h4>Telefone Alternativo: <?= $f['telefone_alternativo'] ?></h4> 
    <h4>Email: <?= $f['email'] ?></h4> 
<?php }
?>


<div style="margin-top: 35px; text-align: center;">
    <p><?= date("Y"); ?><i class="icon-heart" aria-hidden="true"></i>
</div>

</body>
</html>