<?php
    require_once("config.php");
    $destinatario = $email;
    $assunto = $nome_loja . ' - Nome da Loja ';

    $mensagem = utf8_decode('Nome '.$_POST['nome']. "\r\n"."\r\n".'telefone: '.$_POST['telefone']. "\r\n"."\r\n". 'mensagem: '. "\r\n"."\r\n"."\r\n".$_POST['mensagem']);


    $cabecalhos = "From: ".$_POST['email'];

    mail($destinatario, $assunto, $mensagem, $cabecalhos);

    echo 'Enviado com Sucesso!';
