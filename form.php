<?php


$hostname ="localhost";
$dbName ='formulario';
$bancodedados = 'root';
$dbPassword= '';


try {
    $mysqli = new mysqli($hostname, $bancodedados, $dbPassword, $dbName);
    if ($mysqli->connect_error) {
        throw new Exception("A conexão com o banco de dados falhou: " . $mysqli->connect_error);
    }
    //echo "Conexao com o banco de dados feita com sucesso :)";
} catch (Exception $erro) {
    echo "Erro no banco de dados: " . $erro->getMessage();
}