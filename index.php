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
			top: 15%;
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

		</style>

	</head>

  	<body>
		<div class="page">
			<?php include("header_menu.php"); ?>
			<section class="parallax">
				<h1 class="caption">
					<p class="title">GESTÃO PLANO DE SAÚDE</p> 
					<p class="subtitle">Gerindo possibilidades e gerando saúde!</p>
				</h1>
			</section>

			<section class="entidades">
				<h3 class="wow-outer">
					<span class="wow animated" style="visibility: visible;">NOSSAS ENTIDADES</span>
				</h3>
				
				<img src="img/linha.png" class="linha">

				<div class="container2 flex flex-wrap">
					<div class="item">
						<div class="card" style="width: 18rem;">
							<img src="img/entidades/AMICOSERV.jpg" class="card-img-top" alt="...">
						</div>
					</div>

					<div class="item">
						<div class="card" style="width: 18rem;">
							<img src="img/entidades/ABRAE.jpg" class="card-img-top" alt="...">
						</div>
					</div>

					<div class="item">
						<div class="card" style="width: 18rem;">
							<img src="img/entidades/APLB.jpg" class="card-img-top" alt="...">
						</div>
					</div>

					<div class="item">
						<div class="card" style="width: 18rem;">
							<img src="img/entidades/ASSISTBAIXADA.jpg" class="card-img-top" alt="...">
						</div>
					</div>

					<div class="item">
						<div class="card" style="width: 18rem;">
							<img src="img/entidades/PRIMELESTE.jpg" class="card-img-top" alt="...">
						</div>
					</div>

					<div class="item">
						<div class="card" style="width: 18rem;">
							<img src="img/entidades/UNPE.jpg" class="card-img-top" alt="...">
						</div>
					</div>

					<div class="item">
						<div class="card" style="width: 18rem;">
							<img src="img/entidades/UNISERVIP.jpg" class="card-img-top" alt="...">
						</div>
					</div>

					<div class="item">
						<div class="card" style="width: 18rem;">
							<img src="img/entidades/UNED.jpg" class="card-img-top" alt="...">
						</div>
					</div>
				</div>
			</section>
			
			<section class="section bg-gray-100" style="margin-top: 50px;">
				<div class="range justify-content-sm-between flex-sm-row-reverse">
					<div class="cell-sm-6 cell-lg-5 cell-xl-4 align-self-center container">
						<div class="cell-inner">
							<div class="section-lg inset-left-1">
							<h3 class="wow-outer titlecontato"><span class="wow slideInUp" style="color: black;"><center>Contato</center></span></h3>
								<br><center>
								<ul class="list-sm offset-top-2 wow-outer" style="max-width: 400px;">
									<li class="object-inline wow slideInLeft"><span class="icon icon-md mdi mdi-map-marker"></span><a class="link-default" href="#">Rua do carmo 9, 6º andar. <br> Rio de Janeiro, RJ 20011-020</a></li>
									<li class="object-inline wow slideInLeft"><span class="icon icon-md mdi mdi-email"></span><a class="link-default" href="mailto:#">contato@gestaoplanodesaude.com.br</a></li>
									<li class="object-inline wow slideInLeft"><span class="icon icon-md mdi mdi-phone"></span>
								<ul class="list-0">
									<li><a class="link-default" href="tel:#">(21) 97234-7549 </a></li>
								</ul>
								<div class="group group-xs group-middle"></div></div>
							</div>
						</div>
						<div class="cell-sm-6 cell-lg-6 cell-xl-7 height-fill">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2324522545905!2d-43.177604885484975!3d-22.904795485012734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5f9d6b9751%3A0x598353b01f9ff371!2sR.%20do%20Carmo%2C%209%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020011-020!5e0!3m2!1spt-BR!2sbr!4v1588172114855!5m2!1spt-BR!2sbr" width="800" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							<ul class="map_locations">
								<li data-y="40.643180" data-x="-73.9874068">
								<p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

				
			<footer class="section footer-minimal bg-gray-700">
				<div class="container"> 
					<div class="footer-minimal-inner"><a class="brand" href="index.html"><img src="img/logo-default-111x45.png" alt="" width="111" height="45" srcset="img/logo-default-111x45.png"/></a>
						<p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none"/><a href="#">Terms of Use</a><span> and</span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
					</div>
				</div>
			</footer>
		</div>

		<div class="snackbars" id="form-output-global"></div>
		<!-- Javascript-->
		<script src="js/core.min.js"></script>
		<script src="js/script.js"></script>
  	</body>
</html>