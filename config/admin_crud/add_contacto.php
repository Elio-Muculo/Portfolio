<?php
require_once __DIR__ . '/../DB.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dados = [
        'cel1' => $_POST['cel1'],
        'cel2' => $_POST['cel2'],
        'email' => $_POST['email'],
        'endereco' => $_POST['end'],
    ];
    
    

    $sql = "UPDATE contacto SET email = :email, telefone = :cel1, telefone_alternativo = :cel2,
        endereco = :endereco WHERE id = 1";
    if (update($sql, $dados)) {
        header("Location: ../../index.php#rodape");
        die;
    } 
   
}


?>