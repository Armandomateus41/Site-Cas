<?php 
	
	require 'conexao.php';
	$nome = filter_input(INPUT_POST, "nome");
	$ident = filter_input(INPUT_POST, "identificacao");


		$query = sprintf("SELECT * FROM produtos WHERE Id = $ident");
		         
		        $dados = mysql_query($query, $con) or die(mysql_error());

		        // Transforma os dados em um array(vector)

		        $linha = mysql_fetch_assoc($dados);

 ?>


 <!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>C.A.S</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/estilos.css">
			
			<!-- <link rel="stylesheet" href="css/animate.css"> -->
			<style type="text/css">
			body{
				background: url(img/Cas.jpg);
				
			}
				.voltar{
					position: relative;
					padding: 5px 20px 5px 20px;
					margin-bottom: 60px; 
					animation: 1s mexer infinite;

				}

				@keyframes mexer{

					0%{
						left: 10px;
					}
					100%{
						left: -10px;
					}

				}
				


				.voltar span{
					font-size: 14pt;
				}

				.imagem img{
					position: relative;
					border: 1px solid #000;
					width: 200px;
				}

				.descricao{
					font-family: 'Tondo';
					color: #000;
				}

				label{
					color: #000;
					text-align: justify;
				}
				h4{
					position: relative;
					margin: 10px;
				}

			</style>
		</head>
		<body>
			<header class="container">
				<a href="index.php" class="voltar btn btn-success"><span class="fa fa-arrow-left"></span></a>
			</header>
			<!-- END HEADER -->
			<center>
			<div class="container">
			<nav class="imagem">
			<img src="img/<?=$linha['imagem'];?>">
			</nav>
				<p class="descricao">Produto:&nbsp; <?=$linha['Nome'] ?> | Preco:&nbsp; <?=$linha['Preco'] ?>kz</p>
				<div class="col-md-4"></div>
				<div class="container col-md-4">
					<form class="form" action="fim.php" method="POST">

				<input class="btn btn-lg" type="number" max="<?=$linha['Quant']?>" placeholder="Quantidade" name="quant">
				
					<h4>Dados Pessoais</h4>
					<div class="form-group">
					<!-- <label >Nome:</label> -->
					<input class="form-control btn-lg" placeholder="Digite seu nome" type="text" name="nome"> 
					</div>
					<div class="form-group">
					<!-- <label >Email:</label> -->
					<input class="form-control btn-lg" placeholder="Digite seu email" type="text" name="email"> 
					</div>
					<div class="form-group">
					<!-- <label >Nome:</label> -->
					<input class="form-control btn-lg" placeholder="Digite seu numero de Telefone" type="text" name="telefone">
				</div>
					<div>
						<label for="entrega">Entrega ao domicilio</label>
						<input type="checkbox" name="entrega">
					</div>
					<input style="padding: 5px; font-size: 12pt; font-family: 'Times New Roman'" type="submit" class="btn btn-success" value="FINALIZAR" name="">


					
				</div>
				</div>


			</form>
		</div>
		</center>
		</body>
		</html>



<script src="jquery.js"> </script>
<script src="bootstrap.min.js"></script>
<script src="wow.min.js"></script>
<script src="main.js"></script>
<script src="jquery-3.1.0.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    	<script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.min.js"></script>
        <script>
            $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
        </script>
        	<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script src="../js/jquery.js"> </script>