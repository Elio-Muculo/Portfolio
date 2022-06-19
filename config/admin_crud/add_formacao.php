<?php
require_once __DIR__ . '/../DB.php';




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dados = [
        'instituicao' => $_POST['instituicao'],
        'tipo' => $_POST['tipo'],
        'desc' => $_POST['desc'],
        'inicio' => $_POST['inicio'],
        'fim' => $_POST['fim'],
    ];
    

    $sql = "INSERT INTO formacao (instituicao_ensino, tipo, descricao, inicio, fim_formacao) VALUES (:instituicao, :tipo, :desc, :inicio, :fim)";
    if (create($sql, $dados)) {
        header('location: ../../index.php#formacao');
        die;
    }
    
}


?>
