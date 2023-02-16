<?php
require_once("cabecalho2.php");

?>
<!-- Hero Section Begin -->

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Menu</span>
                    </div>
                    <ul>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroFuncionario">Funcionário</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroPrincipal"> Cardápio Principal</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroOpicional">Cardápio Opicional</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroLight">Cardápio Light</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroLightOpicional">Cardápio Light Opicional</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroOvo">Cardápio Ovo</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroGuarnição">Guarnição</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroSobremesa">Sobremesa</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroSaladas">Saladas</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#modalCadastroSuco">Suco</a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">

                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">Buscar</button>
                        </form>
                    </div>
                  <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">

                            <a class="text-info" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?> "><i class="fa fa-whatsapp text-success"></i></a>

                        </div>
                        <div class="hero__search__phone__text">
                            <h5> <?php echo $whatsapp_link ?> </h5>
                            <span>Nosso WhatsaApp</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">

                    <a href="#" class="primary-btn">Ver Cardápio Semanal</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<!-- Modal Cadastro Funcionário-->

<div class="modal fade" id="modalCadastroFuncionario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Funcionário</h5>
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
                        <label> Setor </label>
                        <input type="text" class="form-control" id="setor" name="setor" placeholder="Insira seu Setor">
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

<!-- Modal Cadastro Prato Principal-->

<div class="modal fade" id="modalCadastroPrincipal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Prato Principal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form>s
                    <div class="form-group">

                        <div class="form-group">
                            <label> Nome Prato Principal </label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome">
                        </div>
                        <label for="Data"> Data </label>
                        <input type="date" class="form-control" id="Data" name="Data" VAlue="2023-02-15"placeholder="">

                        <label for="Dia"> DIa da Semana </label>
                        <input type="text" class="form-control" id="Dia" name="Dia" placeholder="">

                    </div>






                    <div class="form-group">
                        <label> Setor </label>
                        <input type="text" class="form-control" id="setor" name="setor" placeholder="Insira seu Setor">
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






























































































<?php
require_once("rodape.php");

?>