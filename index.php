<?php
require_once("cabecalho2.php");

?>

<!-- Hero Section Begin -->
<!-- Hero Section Begin 
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Marcas</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
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

                    <a href="#" class="primary-btn">Comprar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

-->




<!-- Hero Section End -->
<br><br>
<!-- Categories Section Begin -->
<!-- Categories Section Begin 
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/marcas/asus.png">
                        <h5><a href="#">Asus</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/marcas/sansung.png">
                        <h5><a href="#">Sansung</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/marcas/motorola.png">
                        <h5><a href="#">Motorola</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/marcas/apple.png">
                        <h5><a href="#">Apple</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/marcas/Xiaomi.png">
                        <h5><a href="#">Xiaomi</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>CARDÁPIO SEMANAL TESSIN</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                      <!-- <li class="active" data-filter="*">Semanal</li>-->
                        <li data-filter=".principal_opcao_segunda">Segunda</li>
                        <li data-filter=".principal_opcao_terca">Terça</li>
                        <li data-filter=".principal_opcao_quarta">Quarta</li>
                        <li data-filter=".principal_opcao_quinta">Quinta</li>
                        <li data-filter=".principal_opcao_sexta">Sexta</li>
                        <li data-filter=".principal_opcao_sabado">Sabádo</li>
                    </ul>
                </div>
            </div>
        </div>


 <!-- PRATO PRINCIPAL SEGUNDA -->
        <div class="row featured__filter">
             
            
            <div class="col-lg-3 col-md-4 col-sm-6 mix principal_opcao_segunda fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/celular/principal.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="selecionado.php"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Principal</a></h6>
                        <h5>Carne Moída</h5>
                    </div>
                </div>
            </div>

            

              <!-- PRATO OPÇÃO SEGUNDA  -->
            
              <div class="col-lg-3 col-md-4 col-sm-6 mix principal_opcao_segunda fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/celular/opcao.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Opção</a></h6>
                        <h5>Linguiça</h5>
                    </div>
                </div>
            </div>

                   <!-- PRATO OVO SEGUNDA -->
            
                   <div class="col-lg-3 col-md-4 col-sm-6 mix principal_opcao_segunda fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/celular/ovo.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Ovo</a></h6>
                        <h5>Ovo</h5>
                    </div>
                </div>
            </div>

              <!-- PRATO LIGHT SEGUNDA -->
            
              <div class="col-lg-3 col-md-4 col-sm-6 mix principal_opcao_segunda fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/celular/light.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Light</a></h6>
                        <h5>Light</h5>
                    </div>
                </div>
            </div>


            <!-- CARROSSEL GUARNIÇÃO-->
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/celular/guarnicao.png">
                        <h5><a href="#">Guarnição</a></h5><br>
                    </div>
                    <div class="featured__item__text">
                    <h6>Tutu de feijão</h6>
                    </div>
                </div>


            <!-- CARROSSEL SOBREMESA-->
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/celular/sobremesa.png">
                        <h5><a href="#">sobremesa</a></h5>
                    </div>
                    <div class="featured__item__text">
                    <h6>Gelatna / Fruta / Doce / Pudim</h6>
                    </div>
                </div>





             <!-- CARROSSEL SOBREMESA-->
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/celular/suco.png">
                        <h5><a href="#">Bedidas</a></h5>
                    </div>
                    <div class="featured__item__text">
                    <h6>Sucos</h6>
                    </div>
                </div>




                <!-- CARROSSEL SALADA-->
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/celular/salada.png">
                        <h5><a href="#">Buffet de salada</a></h5>
                    </div>
                    <div class="featured__item__text">
                    <h6>Saladas Diversas</h6>
                    </div>
                </div>

       </div>



     <!-- PRATO PRINCIPAL TERÇA 
            
     <div class="col-lg-3 col-md-4 col-sm-6 mix principal_opcao_terca fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/celular/principal.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Principal</a></h6>
                        <h5>Carne Moída</h5>
                    </div>
                </div>
            </div>

            
    
              <!-- PRATO OPÇÃO 
            
              <div class="col-lg-3 col-md-4 col-sm-6 mix principal_opcao_terca fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/celular/opcao.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Opção</a></h6>
                        <h5>Linguiça</h5>
                    </div>
                </div>
            </div>

                   <!-- PRATO OVO 
            
                   <div class="col-lg-3 col-md-4 col-sm-6 mix principal_opcao_terca fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/celular/ovo.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Ovo</a></h6>
                        <h5>Ovo</h5>
                    </div>
                </div>
            </div>

            PRATO LIGHT 
            
              <div class="col-lg-3 col-md-4 col-sm-6 mix principal_opcao_terca fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/celular/light.png">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Light</a></h6>
                        <h5>Light</h5>
                    </div>
                </div>
            </div>

-->


<br><br><br><br><br><br><br><br>   <br><br>


<!-- Blog Section End -->
<?php
require_once("rodape.php");

?>





