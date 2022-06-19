<?php
define("SEPARATOR", "/");
define("DIRECTORIO", __DIR__. "/../../assets/images");
require_once __DIR__ . '/../DB.php';


$tamanho = $_FILES['foto']['size'];
$error = $_FILES['foto']['error'];
$extensao_aceites = ['png', 'jpg', 'jpeg'];
$size = 930000; // 930 kb
$extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
$nome_ficheiro = "up_" . date("Ymd") . date("His") . ".{$extensao}";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dados = [
        'nome' => $_POST['nome'],
        'nacionalidade' => $_POST['nacionalidade'],
        'nr_bi' => $_POST['nr_bi'],
        'bairro' => $_POST['bairro'],
        'data_Nasc' => $_POST['dataNasc'],
        'foto' => $nome_ficheiro
    ];
    
    
    if (in_array($extensao, $extensao_aceites)) {
        if (!($tamanho >= $size)) {
            switch ($error) {
                case 0:
                    move_uploaded_file($_FILES['foto']['tmp_name'], DIRECTORIO.SEPARATOR.$nome_ficheiro);
                    
                    $sql = "UPDATE dados_pessoais SET nome = :nome, data_nascimento = :data_Nasc, nacionalidade = :nacionalidade,
                     bairro = :bairro, nr_BI = :nr_bi, foto_perfil = :foto WHERE id = 1";
                    update($sql, $dados); 

     
                    header('location: ../../index.php#about');
                    break;
            }
        } else {
            $mensagens[] = "o ficheiro possui tamanho nao suportado.";
        }
    } else {
        $mensagens[] = "o ficheiro não é suportado.";
    }
    
}


?>