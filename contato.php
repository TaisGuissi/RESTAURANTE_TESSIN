<?php
require_once("cabecalho.php");

?>
<?php
require_once("cabecalho-busca.php");

?>
<?php
require_once("config.php");

?>

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>WhatsApp</h4>
                    <p><?php echo $whatsapp_link ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt"></span>
                    <h4>Endereço</h4>
                    <p>Alfredo Rachide</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Horário de Atendimento</h4>
                    <p>10:00 am to 23:00 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>Email</h4>
                    <p><?php echo $email ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0757942375!2d-46.65341788554301!3d-23.565721167637243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1600987809394!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>São Paulo</h4>
            <ul>
                <li> <?php echo $whatsapp_link ?></li>
                <li><?php echo $endereco_loja ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Map End -->

<!-- Contact Form Begin -->
<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2>Contate-nos</h2>
                </div>
            </div>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <input type="text" name="nome" placeholder="Seu nome" required>
                </div>
                <div class="col-lg-4 col-md-4">
                    <input type="text" name="email" placeholder="Seu E-mail" required>
                </div>
                <div class="col-lg-4 col-md-4">
                    <input type="text" name="telefone" id="telefone" placeholder="Seu WhatsApp" required>
                </div>

                <div class="col-lg-12 text-center">
                    <textarea name="mensagem" placeholder="Mensagem"></textarea>
                    <button name="btn-enviar-email" id="btn-enviar-email" type="button" class="site-btn">Enviar Mensagem</button>
                </div>
                <div class="col-md-12 text-center mt-3" id="div-mensagem"></div>

            </div>
        </form>
    </div>
</div>
<!-- Contact Form End -->
<?php
require_once("rodape.php");
?>

<script type="text/javascript">
    $('#btn-enviar-email').click(function(event) {
        event.preventDefault(); //Para não atualizar a página 
        $('#div-mensagem').addClass('text-info')
        $('#div-mensagem').text('Enviando');

        $.ajax({
            url: "enviar.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg) {
                if (msg.trim() === 'Enviado com Sucesso!') { //trim: se a mensagem estiver com espaços, deve ser ignorada e compare se  o texto é igual

                    $('#div-mensagem').addClass('text-success')
                    $('#div-mensagem').text(msg);


                    $('#email').val('');
                    $('#nome').val('');
                    $('#telefone').val('');
                    $('#mensagem').val('');

                } else {
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text('Erro ao Enviar o formulário! Provavélmente seu servidor de hospedagem não está com permissão de envio habilitada ou você está em um servidor local');

                }
            }
        })
    })
</script>

</html>