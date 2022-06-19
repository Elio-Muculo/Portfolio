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
        'habilidade' => $_POST['Habilidade'],
        'nivel' => $_POST['nivel'],
        'foto' => $nome_ficheiro
    ];
    
    
    if (in_array($extensao, $extensao_aceites)) {
        if (!($tamanho >= $size)) {
            switch ($error) {
                case 0:
                    move_uploaded_file($_FILES['foto']['tmp_name'], DIRECTORIO.SEPARATOR.$nome_ficheiro);
                    
                    $sql = "INSERT INTO habilidades (habilidade, nivel, imagem) VALUES (:habilidade, :nivel, :foto)";
                    if (create($sql, $dados)) {
                        header('location: ../../index.php#habilidades');
                        die;
                    }
            }
        } else {
            $mensagens[] = "o ficheiro possui tamanho nao suportado.";
        }
    } else {
        $mensagens[] = "o ficheiro não é suportado.";
    }
    
}


?>