<?php

session_start();


if(isset($_POST['submit'])&& !empty($_POST['login_email'])&& !empty($_POST['login_senha'])){
    include_once "database.php";
    include_once "cabecalho2.php";
    
    $login_email = $_POST["login_email"];
    $login_senha = $_POST["login_senha"];

    $sql = "SELECT * FROM login WHERE login_email = '$login_email' and login_senha = '$login_senha'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) <1){
        
        unset($_SESSION['login_email']);
        unset($_SESSION['login_senha']);
   
        header('location: login.php'); 
        
    }else{

        $_SESSION['login_email'] = $login_email;
        $_SESSION['login_email'] = $login_email;
        header('location: index.php'); 
        
    }

}
else{
    header('location: login.php'); 
}




?>