<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contratar</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="page">
      <?php include("header_menu.php"); ?>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(img/atendimento.jpg)">
          <div class="breadcrumbs-custom-inner">
              <div class="container breadcrumbs-custom-container">
                  <div class="breadcrumbs-custom-main">
                      <h6 class="breadcrumbs-custom-subtitle title-decorated" style="color: black;">Faça sua cotação</h6>
                      <h1 class="breadcrumbs-custom-title" style="opacity: 25;"><mark style="background-color:#FD0F2E; border-radius: 5px; opacity:5.5;">Preencha o formulário</mark></h1>
                  </div>
              </div>
          </div>
      </section>

      <section class="section section-lg oh">
        <div class="container">
            <form method="post" action="" id="formulario">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Nome</label>
                  <input type="nome" class="form-control" name="nome" placeholder="Nome Completo" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Telefone</label>
                  <input type="telefone" class="form-control" id="telefone" name="telefone" placeholder="(xx) xxxx - xxxx">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Celular</label>
                  <input type="telefone" class="form-control" id="celular" name="celular" placeholder="(xx) xxxxx - xxxx" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">E-mail</label>
                <input type="text" class="form-control" id="inputAddress" name="email" placeholder="Digite seu e-mail" required>
              </div>

              <div class="g-recaptcha" data-sitekey="6Lf9t6kaAAAAAEoqwkqiTkL1N6LFl9dUoe4HW69o"></div>
              <br>
              <button type="button" class="btn btn-primary enviar_cotacao" id="contratar" style="background: #fd3550;border-color: #fd3550;">ENVIAR</button>

          </form>
        </section>

      <!-- Page Footer-->
      <?php include("footer.php"); ?>
    </div>

    <div>
        <a href="https://api.whatsapp.com/send?phone=552197234-7549" target="_blank">
            <img class="whatsapp" src="img/whatsapp.gif"/>
        </a>
    </div>

    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

    <script>

    jQuery('#telefone').mask('(99) 9999-9999');
    jQuery('#celular').mask('(99) 99999-9999');

    jQuery('#contratar').click(function() {
      var dados = $('#formulario').serialize();

      $.ajax({
          type: 'POST',
          dataType: 'json',
          url: 'cadastrar_form.php',
          async: true,
          data: dados,
          error: function() {
            alert("Error");
          },
          success: function(result)
          {
            if($.trim(result) != 'success'){
              alert("Preencha todos os campos!");
            } else {
              alert("Cadastrado com sucesso");
              window.location.href="cadastro.php";
            }
          }
      });
        return false;
    });

    </script>

  </body>
</html>
