<?php
include_once("../config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login <?php echo $nome_loja ?> </title>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="../css/login.css" rel="stylesheet">
    <script src="../js/login.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Mascara javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="../js/mascara.js"></script>




</head>

<body>



    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form ">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Login</h1>
                                </div>
                            </div>
                            <form action="" method="post" name="login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entre com Email ou CPF">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Senha</label>
                                    <input type="password" name="password" id="senha" class="form-control" aria-describedby="emailHelp" placeholder="Insira a senha">
                                </div>

                                <div class="col-md-12 text-center ">
                                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                                </div>


                                <div class="form-group mt-4">
                                    <small>
                                        <p class="text-center">Não possui cadastro? <a href="#" data-toggle="modal" data-target="#modalCadastro">Cadastrar</a></p>

                                        <p class="text-center"><a class="text-danger" href="#" data-toggle="modal" data-target="#modalRecuperar">Recuperar senha?</a></p>
                                    </small>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div id="second">
                        <div class="myform form ">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Signup</h1>
                                </div>
                            </div>
                            <form action="#" name="registration">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                                </div>
                                <div class="col-md-12 text-center mb-3">
                                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
<!-- Modal Cadastro-->

<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



                <form>
                    <div class="form-group">

                        <div class="form-group">
                            <label> Nome Completo </label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome">
                        </div>
                        <label> E-mail </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu email">

                    </div>
                    <div class="form-group">
                        <label> CPF </label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Senha </label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <label> Confirmar Senha </label>
                            <input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="Confirme sua senha">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                        <button type="button" id="btn-cadastrar" class="btn btn-info">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Recuperar-->


<div class="modal fade" id="modalRecuperar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



                <form>
                    <div class="form-group">


                        <label> E-mail </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu email">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                        <button type="button" id="btn-recuperar" class="btn btn-info">Recuperar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>