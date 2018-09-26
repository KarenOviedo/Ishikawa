<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title>Asignación de valores: Pareto</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="Template by Colorlib" />
		<meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
		<meta name="author" content="DryThemes" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

		<link rel="shortcut icon" href="images/favicon.png" />
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css"  href='css/clear.css' />
		<link rel="stylesheet" type="text/css"  href='css/common.css' />
		<link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
		<link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
		<link rel="stylesheet" type="text/css"  href='css/prettyPhoto.css' />
		<link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
		<link rel="stylesheet" type="text/css"  href='style.css' />

		<?php
			$Problema = $_GET["problema"];
			$c1 = $_GET["c1"];
			$c2 = $_GET["c2"];
			$c3 = $_GET["c3"];
			$c4 = $_GET["c4"];
			$c5 = $_GET["c5"];
			$c6 = $_GET["c6"];
		?>

		<script type="text/javascript">
			var Problema = "<?php echo $Problema; ?>";
			var c1 = "<?php echo $c1; ?>";
			var c2 = "<?php echo $c2; ?>";
			var c3 = "<?php echo $c3; ?>";
			var c4 = "<?php echo $c4; ?>";
			var c5 = "<?php echo $c5; ?>";
			var c6 = "<?php echo $c6; ?>";
		</script>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			function maxNum() {
				//alert("¡Hola! Esta es la función para verificar el máximo de puntos");
				var vCausa1 = document.querySelector('input[name="vCausa1"]').value;
				var vCausa2 = document.querySelector('input[name="vCausa2"]').value;
				var vCausa3 = document.querySelector('input[name="vCausa3"]').value;
				var vCausa4 = document.querySelector('input[name="vCausa4"]').value;
				var vCausa5 = document.querySelector('input[name="vCausa5"]').value;
				var vCausa6 = document.querySelector('input[name="vCausa6"]').value;

				var totalPoints = parseInt(vCausa1) + parseInt(vCausa2) + parseInt(vCausa3) + parseInt(vCausa4) + parseInt(vCausa5) + parseInt(vCausa6);
				var remainingPoints = 100 - totalPoints;

				//evitar puntos negativos
				if (remainingPoints < 0) {
					remainingPoints = 0;
				}

				if(totalPoints>100){
					alert("Has agregado demasiados puntos");
					document.getElementById("gChart").disabled = true;
				} else {
					if (totalPoints<100){
						//alert("Puedes seguir sumando puntos");
						document.getElementById("gChart").disabled = true;
					} else {
						document.getElementById("gChart").disabled = false;
					}
				}

				document.getElementById('points').innerHTML = totalPoints;
				document.getElementById('remainingPoints').innerHTML = remainingPoints;
				//alert(arrayNumbers.sortNumbers());
			}


			function generarGrafico(e) {
				e.preventDefault();
				var vCausa1 = document.querySelector('input[name="vCausa1"]').value;
				var vCausa2 = document.querySelector('input[name="vCausa2"]').value;
				var vCausa3 = document.querySelector('input[name="vCausa3"]').value;
				var vCausa4 = document.querySelector('input[name="vCausa4"]').value;
				var vCausa5 = document.querySelector('input[name="vCausa5"]').value;
				var vCausa6 = document.querySelector('input[name="vCausa6"]').value;

				window.open("paretochart.php?vCausa1="+vCausa1+"&vCausa2="+vCausa2+"&vCausa3="+vCausa3+"&vCausa4="+vCausa4+"&vCausa5="+vCausa5+"&vCausa6="+vCausa6+"&c1="+c1+"&c2="+c2+"&c3="+c3+"&c4="+c4+"&c5="+c5+"&c6="+c6+"&Problema="+Problema, "_blank");
			}
		</script>

		<!--Estilos para las tarjetas de los sombreros-->
		<style>
			.container{
				float: left;
				width: 210px;
				height: auto;
			}

			.container2{
				width: 210px;
				height: auto;
				align-items: center;
				display: flex;
				justify-content: center;
			}

			.container-sup{
				width: auto;
				height: auto;
				align-items: center;
				display: flex;
				justify-content: center;
			}

			.sombrero {
				float: left;
				width: 200px;
				height: auto;
				border-radius: 5%;
				background: #d1d1d1;
				margin-top: 5px;
				margin-left: 5px;
			}

			.add{
				float: left;
				margin-top: 10px;
				text-align: center;
			}

			.espacio{
				float: left;
				width: 10px;
				height: 100px;
			}

			.sombrero p, .sombrero h3, .sombrero h4 {
				text-align: center;
				vertical-align: middle;
				line-height: 2;
			}

			.dark p{
				color: #e6e6e6;
			}

			.content-wrap button{
			  /* width: 100%; */
			  background-color: #9999CC;
			  color: black;
			  font-size: 15px;
			  font-family: Montserrat;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  border-radius: 4px;
			}

			.content-wrap button:hover{
			  background-color: #D9B5F9;
			}

			input[Type="number"]{
				width:50px;
				background-color: #F0F2F3;
				font-size: 15px;
				padding: 4px;
				padding-left: 10px;
				border: none;
				border-radius: 5px;
				font-family: Montserrat;
			}

			button:disabled{
				background-color: #D9B5F9;
			}

		</style>


	</head>
	<body class="post single-post">

		<table class="doc-loader">
			<tbody>
				<tr>
					<td>
						<img src="images/ajax-document-loader.gif" alt="Loading...">
					</td>
				</tr>
			</tbody>
		</table>


		<nav id="header-main-menu">
			<ul class="main-menu sm sm-clean">
				<li>
					<a href="index.html">Inicio</a>
				</li><br>
				<li>
					<a href="ishikawa.php">Ishikawa & Pareto</a>
				</li><br>
				<li>
					<a href="sombreros.html">Seis Sombreros</a>
				</li><br><hr>
				<li>
					<a href="about.html">Acerca de</a>
				</li>
			</ul>
		</nav>

		<div id="content" class="site-content center-relative">

			<div class="header-holder">
				<div class="toggle-holder relative right">
					<div id="toggle">
						<div class="first-menu-line"></div>
						<div class="second-menu-line"></div>
						<div class="third-menu-line"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="background-image-holder">
				<img src="demo-images/one_drop_home_image02.jpg" alt="">
			</div>

			<div class="single-post-wrapper content-1170 center-relative">
				<article>
					<img src="images/default_droppler_logo.png" alt="logo" style="width: 150px; height: 150px; display: block; margin-left: auto; margin-right: auto;">
					<h1 class="entry-title">Diagrama de Pareto</h1>
					<div class="post-info center-text">
						<div class="post-date">Septiembre 24, 2018</div>
						<div class="cat-links">
							<ul>
								<li>
									<a href="#">Tópico III</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="entry-content">
						<div class="content-wrap">


							<p>El siguiente formulario te ayudará a darle valor a cada una de las causas del problema <strong><?php echo $Problema; ?></strong></p><br>

							<p>Has agregado <strong id="points">0</strong> puntos, te quedan <strong id="remainingPoints">100</strong> puntos para gastar. Debes asignar todos los puntos disponibles a las diferentes causas para activar el botón.</p><br>

							<form name="fValores" class="" method="get">
								<input type="number" name="vCausa1" value="0" min="0" max="100" onclick="maxNum()"> <?php echo $c1; ?><br>
								<input type="number" name="vCausa2" value="0" min="0" max="100" onclick="maxNum()"> <?php echo $c2; ?><br>
								<input type="number" name="vCausa3" value="0" min="0" max="100" onclick="maxNum()"> <?php echo $c3; ?><br>
								<input type="number" name="vCausa4" value="0" min="0" max="100" onclick="maxNum()"> <?php echo $c4; ?><br>
								<input type="number" name="vCausa5" value="0" min="0" max="100" onclick="maxNum()"> <?php echo $c5; ?><br>
								<input type="number" name="vCausa6" value="0" min="0" max="100" onclick="maxNum()"> <?php echo $c6; ?><br>
								<br>
								<button onclick="generarGrafico(event)" id="gChart" name="button" disabled>Generar diagrama de Pareto</button>
							</form>
						</div>
					</div>
					<div class="clear"></div>
				</article>
			</div>
		</div>

		<footer class="footer" style="background: #62626d; margin-top: 0px;">
			<div class="content-1170 center-relative">
				<ul>
					<br><br>
					<img src="images/default_droppler_logo.png" alt="logo" style="width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;"><br>

					<li class="left-footer-content">
						<h4 style="text-align: center;">"Kuali Tlakah" es el náhuatl para "gente buena".</h4><br><br>
					</li>

					<li class="right-footer-contnet">

						<p style="text-align: center; border-left: 2px solid #9999cc">
							Creemos firmemente en nuestras raices mexicanas.
							<br>
							Es por ello que decidimos rendir tributo a esta bella lengua indígena, que nos ha dado un gran sentido de identidad a través de los años.
						</p><br><br>
					</li>

					<br><br><br>
					<p style="text-align: center;"><strong>Universidad Autónoma de Querétaro</strong></p>
					<p style="text-align: center;">Facultad de Informática</p>
					<br>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<p style="text-align: center;">&copy;2018 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</ul>
				<div class="clear"></div>
			</div>
		</footer>

		<div class="fixed scroll-top">
			<img src="images/back_to_top.png" alt="Go Top">
		</div>

		<!--Load JavaScript-->
		<script src="js/jquery.js"></script>
		<script src='js/jquery.fitvids.js'></script>
		<script src='js/jquery.smartmenus.min.js'></script>
		<script src='js/isotope.pkgd.js'></script>
		<script src='js/imagesloaded.pkgd.js'></script>
		<script src='js/isotope.pkgd.js'></script>
		<script src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
		<script src='js/jquery.mousewheel.min.js'></script>
		<script src='js/jquery.touchSwipe.min.js'></script>
		<script src='js/jquery.easing.1.3.js'></script>
		<script src='js/imagesloaded.pkgd.js'></script>
		<script src='js/jquery.prettyPhoto.js'></script>
		<script src='js/jquery.nicescroll.min.js'></script>
		<script src='js/main.js'></script>
	</body>
</html>
