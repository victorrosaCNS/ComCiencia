<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Com Ciência Educacional</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/estilo.css" rel="stylesheet">

    <!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
		$(document).ready(function(){
			var campo_vazio = false;
			$('#btn_login').click(function(){
				if ($('#campo_usuario').val() == '') {
					$('#campo_usuario').css({'border-color': '#A94442'});
					var campo_vazio = true;
				} else {
					$('#campo_usuario').css({'border-color': '#CCC'});
				}
				if ($('#campo_senha').val() == '') {;
					$('#campo_senha').css({'border-color': '#A94442'});
					var campo_vazio = true;
				} else {
					$('#campo_usuario').css({'border-color': '#CCC'});
				}
				if (campo_vazio) return false;
			});
		});						
	</script>
</head>
<body>
	
	<nav class="navbar navbar-default navbar-static-top">

		<div class="navbar-collapse collapse">
			<!-- <div class="container"> -->
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      	</button>
			      	<a class="navbar-brand" href="index.php">Com Ciencia</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav">
			        	<li><a href="#">Sobre <span class="sr-only">(current)</span></a></li>
			        	<li><a href="#">Contatos</a></li>
			     	</ul>
			    </div><!-- /.navbar-collapse -->
		<!--	</div> -->
		</div>
	</nav>

	<div class="container">
	    <!-- Main component for a primary marketing message or call to action -->
	   
		<img src="C:\xampp\htdocs\ComCiencia\imagens\nuvemComCienciaEducacional.png">

	    <div class="clearfix"></div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>