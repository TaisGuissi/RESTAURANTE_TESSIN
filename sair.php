<?php

session_start();

unset($_SESSION['login_email']);
unset($_SESSION['login_senha']);

header('location: login.php' ); 

?>





