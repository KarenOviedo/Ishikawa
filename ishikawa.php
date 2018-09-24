<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Ishikawa</title>
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

        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->



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
                    <h1 class="entry-title">Diagrama de Ishikawa</h1>
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
                            <p>El siguiente formulario te ayudará a crear el diagrama de Ishikawa de algún problema, debes ingresar 6 posibles causas,
                              esto con la finalidad de generar una representación gráfica que te permitirá visualizar las causas que explican
                              el determinado problema.</p><br>

                            <br><br>

                            <div class="container-sup">

                              <div class="form-ishikawa">
                                <form class="" action="pdf-ishikawa.php" method="get">
                                    <label>Problema</label>
                                    <input type="text" name="problema" value="">
                                    <label>Causas</label><br>
                                    <input type="text" name="c1" value="" placeholder="Causa 1">
                                    <input type="text" name="c2" value="" placeholder="Causa 2">
                                    <input type="text" name="c3" value="" placeholder="Causa 3">
                                    <input type="text" name="c4" value="" placeholder="Causa 4">
                                    <input type="text" name="c5" value="" placeholder="Causa 5">
                                    <input type="text" name="c6" value="" placeholder="Causa 6">
                                    <button onclick="enviarFormulario(event)" name="button">Generar diagrama de Ishikawa</button>
                                    <button onclick="enviarAPareto(event)" name="button">Generar diagrama de Pareto</button>
                                </form>
                              </div>

                              <script type="text/javascript">
                                function enviarFormulario(e) {
                                  e.preventDefault();
                                  var problema = document.querySelector('input[name="problema"]').value;
                                  var c1 = document.querySelector('input[name="c1"]').value;
                                  var c2 = document.querySelector('input[name="c2"]').value;
                                  var c3 = document.querySelector('input[name="c3"]').value;
                                  var c4 = document.querySelector('input[name="c4"]').value;
                                  var c5 = document.querySelector('input[name="c5"]').value;
                                  var c6 = document.querySelector('input[name="c6"]').value;

                                  window.open("pdf-ishikawa.php?problema="+problema+"&c1="+c1+"&c2="+c2+"&c3="+c3+"&c4="+c4+"&c5="+c5+"&c6="+c6, "_blank");
                                }

                                function enviarAPareto(e) {
                                  e.preventDefault();
                                  var problema = document.querySelector('input[name="problema"]').value;
                                  var c1 = document.querySelector('input[name="c1"]').value;
                                  var c2 = document.querySelector('input[name="c2"]').value;
                                  var c3 = document.querySelector('input[name="c3"]').value;
                                  var c4 = document.querySelector('input[name="c4"]').value;
                                  var c5 = document.querySelector('input[name="c5"]').value;
                                  var c6 = document.querySelector('input[name="c6"]').value;

                                  window.open("pareto.php?problema="+problema+"&c1="+c1+"&c2="+c2+"&c3="+c3+"&c4="+c4+"&c5="+c5+"&c6="+c6, "_blank");

                                }
                              </script>

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
