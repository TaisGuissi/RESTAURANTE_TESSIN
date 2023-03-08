<?php
require_once("view\config.php");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Venda de Smartphones">
    <meta name="keywords" content="Celular, Smartphones,  Dispositivos Moveís">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $nome_loja ?> </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="shortcut icon" href="/logoicone1.ico" type="image/x-icon">
    <!--Icone do site -->
    <link rel="icon" href="/logoicone1.ico" type="image/x-icon">


</head>

<body>



    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>
    -->



    <!-- Humberger Begin -->
    
    <!-- Humberger End -->

    <!-- Header Section Begin -->

    <?php require_once "logadosucesso.php"?>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> <?php echo $logado ?></li>
                               <!-- <li><?php echo $texto_destaque ?></li>-->
                               <a href='sair.php'> <button>SAIR</button><br><br>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a target="_blank" title=" Ir para a página do facebook" href="#"><i class="fa fa-facebook text-info"></i></a>
                                <a href="#"><i class="fa fa-instagram text-danger"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?> "><i class="fa fa-whatsapp text-success"></i></a>

                            </div>
                            <div class="header__top__right__auth">
                                <a href="login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </header>
    <!-- Header Section End -->

    