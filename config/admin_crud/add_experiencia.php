<?php
require_once __DIR__ . '/../DB.php';




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dados = [
        'organizacao' => $_POST['organizacao'],
        'tipo' => $_POST['cargo'],
        'desc' => $_POST['desc'],
        'inicio' => $_POST['inicio'],
        'fim' => $_POST['fim'],
    ];
    

    $sql = "INSERT INTO exp_prof (inicio, fim, organizacao, cargo, descricao) VALUES (:inicio, :fim, :organizacao, :tipo, :desc)";
    if (create($sql, $dados)) {
        header('location: ../../index.php#formacao');
        die;
    }
    
}


?>
