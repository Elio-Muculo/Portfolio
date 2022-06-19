<?php


define('DATABASE', 'my_portfolio');
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');

try {
    $conection = new PDO ('mysql:host='.HOST.'; dbname='.DATABASE, USER, PASS);
    
} catch (Exception $e) {
    echo $e->getMessage();
}


function create($sql = "", $input = []) :int {
    global $conection;

    $stmt  = $conection->prepare($sql);

    $stmt->execute($input);

    return $stmt->rowCount();
}


function read($sql = '', $input = []) :array {
    global $conection;

    $stmt  = $conection->prepare($sql);

    $stmt->execute($input);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



function readOne($sql = '', $dados = [])  {
    global $db;

    $stmt  = $db->prepare($sql);

    $stmt->execute($dados);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}



function update($sql = '', $dados = []) :int {
    global $conection;

    $stmt  = $conection->prepare($sql);

    $stmt->execute($dados);

    return $stmt->rowCount();
}



function delete($sql = '', $dados = []) :int {
    global $db;

    $stmt  = $db->prepare($sql);

    $stmt->execute($dados);

    return $stmt->rowCount();
}


function getMonth($data) {

    $data = date('m', strtotime($data));
    $mes = '';
    switch ($data) {
        case '01':
            $mes = 'Janeiro ';
            break;
        case '02':
            $mes = 'Fevereiro ';
            break;
        case '03':
            $mes = 'Março ';
            break;
        case '04':
            $mes = 'Abril ';
            break;
        case '05':
            $mes = 'Maio ';
            break;
        case '06':
            $mes = 'Junho ';
            break;
        case '07':
            $mes = 'Julho ';
            break;
        case '08':
            $mes = 'Agosto ';
            break;
        case '09':
            $mes = 'Setembro ';
            break;
        case '10':
            $mes = 'Outubro ';
            break;
        case '11':
            $mes = 'Novembro ';
            break;
        case '12':
            $mes = 'Dezembro ';
            break;
            
        default:
            # code...
            break;
    }

    return $mes;
}



function getYear($data) {
    $data = date('Y', strtotime($data));

    return $data;
}


function dateArticle($data) {
    $year = getYear($data);
    $mes = getMonth($data);
    $dia = date('d', strtotime($data));

    return $mes ." ". $dia .", ". $year;
}