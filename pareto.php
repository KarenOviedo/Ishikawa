<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title>Pareto</title>
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
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawVisualization);

			function drawVisualization() {
				// Some raw data (not necessarily accurate)
				var data = google.visualization.arrayToDataTable([
					['Causa', 'Valor', 'Procentaje', 'Marcador'],
					['<?php echo $c1; ?>',  165,      50,         80],
					['<?php echo $c2; ?>',  135,      70,        80],
					['<?php echo $c3; ?>',  157,      85,        80],
					['<?php echo $c4; ?>',  139,      95,        80],
					['<?php echo $c5; ?>',  136,      99,         80],
					['<?php echo $c6; ?>',  136,      100,         80]
				]);

				var options = {
					title : 'Gráfico de Pareto sobre el problema "<?php echo $Problema; ?>"',
					vAxis: {title: 'Cups'},
					hAxis: {title: 'Month'},
			//      hAxis.direction: '1',
					seriesType: 'line',
					series: {0: {type: 'bars'}},
				};

				var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			}


			function maxNum() {
				alert("¡Hola! Esta es la función para verificar el máximo de puntos");
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

			.form-ishikawa input{
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
			}

			.form-ishikawa button{
			  /* width: 100%; */
			  background-color: #D3B9C5;
			  color: black;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  border-radius: 4px;
			}

			.form-ishikawa button:hover{
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
					<a href="ishikawa.php">Ishikawa</a>
				</li><br>
				<li>
					<a href="pareto.html">Pareto</a>
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
							<br>

							Tienes <strong>Algo</strong> puntos para gastar.

							<br><br>

							<input type="number" name="causa1" value="" min="0" max="100" onclick="maxNum()"> <?php echo $c1; ?><br>
							<input type="number" name="causa2" value="" min="0" max="100" onclick="maxNum()"> <?php echo $c2; ?><br>
							<input type="number" name="causa3" value="" min="0" max="100" onclick="maxNum()"> <?php echo $c3; ?><br>
							<input type="number" name="causa4" value="" min="0" max="100" onclick="maxNum()"> <?php echo $c4; ?><br>
							<input type="number" name="causa5" value="" min="0" max="100" onclick="maxNum()"> <?php echo $c5; ?><br>
							<input type="number" name="causa6" value="" min="0" max="100" onclick="maxNum()"> <?php echo $c6; ?><br>


							<?php
								/*echo "Tu problema es ".$Problema;
								echo "<br>Tu primer causa es: ".$c1;
								echo "<br>Tu segunda causa es: ".$c2;
								echo "<br>Tu tercera causa es: ".$c3;
								echo "<br>Tu cuarta causa es: ".$c4;
								echo "<br>Tu quinta causa es: ".$c5;
								echo "<br>Tu sexta causa es: ".$c6;*/
							?>

							<div class="container-sup">

							  <div class="form-ishikawa">
								<div id="chart_div" style="width: 900px; height: 500px;"></div>
								<!-----------------------DIAGRAMA-------------------->
							  </div>

							</div>
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
