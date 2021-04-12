<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>Contato</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">

        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/style.css" id="main-styles-link">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <style>

        .loading{
            width: 50px;
        }

        </style>
    </head>

    <body>
        <div class="page">
            <?php include("header_menu.php"); ?>
            <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(img/contato.jpg);">
                <div class="breadcrumbs-custom-inner">
                    <div class="container breadcrumbs-custom-container">
                        <div class="breadcrumbs-custom-main">
                            <h6 class="breadcrumbs-custom-subtitle title-decorated" style="color:black;">FALE CONOSCO</h6>
                            <h1 class="breadcrumbs-custom-title" style="color:orange;"><mark style="background-color:#FD0F2E; border-radius: 5px;">CONTATO</mark></h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-sm">
                <div class="container">
                    <div class="layout-bordered">
                        <div class="layout-bordered-item wow-outer">
                            <div class="layout-bordered-item-inner wow slideInUp">
                                <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                                    <ul class="list-0">
                                        <li><a class="link-default" href="https://wa.me/5521972347549?text=Ol%C3%A1!">(21) 97234-7549</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="layout-bordered-item wow-outer">
                                <div class="layout-bordered-item-inner wow slideInUp">
                                    <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:#">contato@gestaoplanodesaude.com.br</a>
                                </div>
                            </div>
                            <div class="layout-bordered-item wow-outer">
                                <div class="layout-bordered-item-inner wow slideInUp">
                                    <div class="icon icon-lg mdi mdi-map-marker text-primary"></div>Rua do carmo 9, 6º andar.<br> Rio de Janeiro, RJ 20011-020<br>Funcionamento<br> Segunda à sexta das 9h às 18h
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="section bg-gray-100">
                <div class="range justify-content-xl-between">
                    <div class="cell-xl-6 align-self-center container">
                        <div class="row">
                            <div class="col-lg-9 cell-inner">
                                <div class="section-lg">
                                    <h3 class="wow-outer"><span class="wow slideInDown">Fale Conosco</span></h3>
                                    <label class="form-label-outside" for="contact-first-name">Elogios, sugestões, dúvidas ou reclamações.</label>
                                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" id="contato">
                                        <div class="row row-10">
                                            <div class="col-md-12 wow-outer">
                                                <div class="form-wrap wow ">
                                                    <label class="form-label-outside" for="contact-first-name">Nome Completo</label>
                                                    <input class="form-input" id="nome" type="text" name="nome">
                                                </div>
                                            </div>
                                            <div class="col-md-6 wow-outer">
                                                <div class="form-wrap wow">
                                                    <label class="form-label-outside" for="contact-email">E-mail</label>
                                                    <input class="form-input" id="email" type="email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 wow-outer">
                                                <div class="form-wrap wow">
                                                    <label class="form-label-outside" for="contact-phone">Telefone Celular</label>
                                                    <input class="form-input" id="celular" type="text" name="telefone">
                                                </div>
                                            </div>
                                            <div class="col-12 wow-outer">
                                                <div class="form-wrap wow">
                                                <label class="form-label-outside" for="contact-message">Escreva sua mensagem!</label>
                                                <textarea class="form-input" id="contact-message" name="mensagem"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button button-primary" type="button" id="enviar">Enviar</button>                                
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-xl-5 height-fill wow fadeIn">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2324522545905!2d-43.177604885484975!3d-22.904795485012734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5f9d6b9751%3A0x598353b01f9ff371!2sR.%20do%20Carmo%2C%209%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020011-020!5e0!3m2!1spt-BR!2sbr!4v1588172114855!5m2!1spt-BR!2sbr" style="width: 100%;" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </section>
        </div>

        <?php include("footer.php"); ?>

        <div class="snackbars" id="form-output-global"></div>
        <script src="js/core.min.js"></script>
        <script src="js/script.js"></script>
    
        <script>

        jQuery("#enviar").click(function() {
    		const dados = $('#contato').serialize();
            const button_enviar = $('#enviar');

    		$.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'contato_email.php',
                async: true,
                data: dados,
                beforeSend: function(){
                    button_enviar.html('<img src="img/loading.gif" class="loading">');
                },
                error: function() {
                    button_enviar.html('ENVIAR');
                    swal("Ah não!", "Tivemos problemas. Verifique sua conexão!", "error");
                },
    			success: function(result) {
                    if($.trim(result) == "error"){
                        button_enviar.html('ENVIAR');
                        swal("Ops!", "Você deve preencher todos os campos!", "warning");
                    } else if($.trim(result) == "success"){
                        button_enviar.html('ENVIADO!');
                        button_enviar.attr('disabled', 'true');    
                        swal("Perfeito", "Em breve entraremos em contato com você!", "success");
                    }
    			}
           });
        });

        </script>      

    </body>
  </html>
