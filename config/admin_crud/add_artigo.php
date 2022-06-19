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
        'titulo' => $_POST['titulo'],
        'texto' => $_POST['texto'],
        'data_pub' => $_POST['data_pub'],
        'autor' => $_POST['autor'],
        'foto' => $nome_ficheiro
    ];
    
    
    if (in_array($extensao, $extensao_aceites)) {
        if (!($tamanho >= $size)) {
            switch ($error) {
                case 0:
                    move_uploaded_file($_FILES['foto']['tmp_name'], DIRECTORIO.SEPARATOR.$nome_ficheiro);
                    
                    $sql = "INSERT INTO artigos (titulo, texto, data_publicacao, autor, imagem) VALUES (:titulo, :texto, :data_pub, :autor, :foto)";
                    if (create($sql, $dados)) {
                        header('location: ../../index.php#artigos');
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