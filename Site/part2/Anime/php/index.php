<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    </head>

    <body>
        
    <?php
       if(!isset($_SESSION['login'])){
        if(isset($_POST['acao']) ){
            $login = 'endrigo';
            $senha = '1234567890';

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if($login == $loginForm && $senha == $senhaForm){
                $_SESSION['login'] = $login;
                header('location: index.php');

//logado com sucesso

            }
            else{
                //algum erro
                echo 'Dados Invalidos';
            }
        }
        include('login.php');

       }
       else{
        if(isset($_GET['site'])){
            unset($_SESSION['login']);
            session_destroy();
            header('location: chainsaw.html');
        }
      
        include('home.php');
       }
       

    ?>
       
</html>