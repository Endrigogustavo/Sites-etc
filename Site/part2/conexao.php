<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "texte1";


//criar conexão

try{
$conn = new PDO("mysql:host=$servidor;dbname=" . $dbname, $usuario, $senha);
//echo "sucesso";
}
catch(PDOException $err){
   // echo "erro" . $err->GetMessager();
}