<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "texte1";

//criar conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//part 2

if($conn->error){
    die("falha ao conectar com o banco de dados: " . $conn->erro);
}