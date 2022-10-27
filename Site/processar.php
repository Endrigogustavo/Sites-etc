<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_EMAIL);
$senha = password_hash($_POST['senha_usuario'], PASSWORD_DEFAULT);
$password = $senha;

//echo "nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (nome, usuario, senha_usuario) VALUES ('$nome', '$email','$password')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
    header("location: index.php");

}
else{
    $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
    header("location: index.php");

}