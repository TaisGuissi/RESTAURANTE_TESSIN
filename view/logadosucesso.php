
<?php

session_start();


if((!isset($_SESSION['login_email']) ==true)and(!isset($_SESSION['login_senha'])==true)){
    
    unset($_SESSION['login_email']);
    unset($_SESSION['login_senha']);
    header('location: login.php');
}
$logado = $_SESSION['login_email'];

?> 
 



<!--<div class="box">


    <fieldset>
    <legend>Bem-vindo</legend><?php echo"Usuário: $logado"; ?><br><br>
    <a href='sair.php'> <button>SAIR</button><br><br>


   
    </fieldset>
    </div>
    <br><br>-
-->

    