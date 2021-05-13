<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
	<head>
    	<title>Gestão Plano de Saúde</title>
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<!-- Stylesheets-->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/fonts.css">
		<link rel="stylesheet" href="css/style.css" id="main-styles-link">

    	<style>

    	.contrate{
        	background-color: #fd3550;
        	padding: 10px;
        	border-radius: 18px;
        	color: white!important;
      	}

		.contrate:hover{
			background-color: #d3d3d3;
			color: black!important;
		}

		.parallax {
			background-image: url("img/banner.jpg");
			min-height: 550px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.caption {
			text-shadow: 2px 2px black;
			color: white;
			font-size: 45px;
			position: absolute;
			top: 19%;
			left: 55%;
			transform: TranslateX(-50%);
			text-align: left;
			width: 100%;
		}

		@media (min-width: 913px) and (max-width: 1246px){
			.caption {
				top: 15%;
			}
		}

		@media (min-width: 639px) and (max-width: 912px){
			.caption {
				top: 13%;
				text-align: center;
				left: 49%;
			}

			.subtitle{
				font-size: 22px;
			}
		}

		@media (max-width: 638px){
			.caption {
				top: 8.5%;
				text-align: center;
				left: 49%;
				font-size: 30px;
			}

			.subtitle{
				font-size: 22px;
			}

			.titlecontato {
				text-align: center;
			}
		}

		.title{
			font-weight: bold;
		}

		.entidades{
			padding-top: 60px;
			padding-bottom: 20px;
			text-align: center;
		}

		.linha{
			margin-top: -3px;
		}

		.col-lg-3{
			background-color: red;
			color: white;
		}
		.flex {
			display: flex;
		}

		.flex-wrap {
			flex-wrap: wrap;
		}

		.flex-item-1 {
			flex: 1;
		}

		/* Flex Item */
		.item {
			margin: 5px;
			font-size: 1.5em;
			-webkit-filter:grayscale(100%);
			cursor: pointer;
		}

		.item:hover{
			-webkit-filter:grayscale(0%);
		}

		@media (max-width: 991px){
			.item {
				-webkit-filter:grayscale(0%);
			}
		}

		.container2 {
			max-width: 98%;
			margin: 0 auto;
			justify-content: center;
			align-items: center;
			margin-top: 50px;
		}

		.whatsapp {
			position: fixed;
			top: calc(100% - 110px);
			left: 2%;
			width: 100px;
			z-index: 100000;
		}

		</style>

	</head>

  	<body>
        <div class="page">
            <?php include("header_menu.php"); ?>
            <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(img/institucional.jpg)">
                <div class="breadcrumbs-custom-inner">
                    <div class="container breadcrumbs-custom-container">
                        <div class="breadcrumbs-custom-main">
                            <h6 class="breadcrumbs-custom-subtitle title-decorated" style="color: black;">Institucional</h6>
                            <h1 class="breadcrumbs-custom-title" style="opacity: 25;"><mark style="background-color:#FD0F2E; border-radius: 5px; opacity:5.5;">Quem Somos</mark></h1>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section section-lg">
                <div class="container">
                    <div class="row row-50 justify-content-center justify-content-lg-between">
                        <div class="col-md-10 col-lg-6">
							<p>Nós somos um grupo de associações profissionais e estudantis que tem como objetivo proporcionar as melhores opções que o mercado de planos de saúde disponibiliza.
							<br><br>Hoje ter um plano de saúde significa proporcionar mais tranquilidade e atendimento de qualidade quando mais se precisa.
							Além de contar com uma rede própria e credenciada de hospitais, o plano de saúde também se preocupa com a prevenção de doenças e tratamentos para manter a qualidade de vida.
							<br><br>Por isso estamos aqui para gerar possibilidades e gerar saúde.</p>

                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-5"> <img class="img-responsive" src="img/logo_gestao.png" alt="" width="470" height="334"/></div>
                    </div>
                </div>
            </section>

			<?php include("footer.php");?>
		</div>

		<div class="snackbars" id="form-output-global"></div>
		<!-- Javascript-->
		<script src="js/core.min.js"></script>
		<script src="js/script.js"></script>
  	</body>
</html>
