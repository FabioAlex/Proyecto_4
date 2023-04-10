<?php
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>gimnasio cristiano luz y vida</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="estudiantes, colegio, colegio cristiano luz y vida, notas">
    <meta name="description" content="plataforma para toma de notas y manejo de colegios">
    <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/nivo-slider1.css">
		<link rel="stylesheet" href="css/mi-slider.css">
		<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.nivo.slider.js"></script>

		<script type="text/javascript"> 
		$(window).on('load', function() {
    $('#slider').nivoSlider(); 
		}); 
		</script>
</head>

<body>

<div id="container_general">

<img src="img/fondo_principal.png" id="fondo_general">


	<div id="div_superior"></div>
	<div id="div_superior_izquierdo"></div>
	<div id="div_superior_derecho"></div>
	
		<header>
			<div class="header-superior">
				<!-- <div class="logo">
					<img src="img/Escudo-Mini.png" alt=""> -->
			</div>
					
			<div class="contenedor-superior">
				<ul id="menu_rol">
					<li id="menu_rol_item"><a href="#">Noticias</a></li>
					<li id="menu_rol_item"><a href="#">Eventos</a></li>
					<li id="menu_rol_item"><a href="#">Estudiantes</a></li>
					<li id="menu_rol_item"><a href="#" class="active">Docentes</a></li>
					<li id="menu_rol_item"><a href="#">Egresados</a></li>
						<div class="search">
							<input type="search" placeholder="¿Qué deseas buscar?">
						</div>
				</ul>   
			</div>
			
			<div class="contenedor-menu">
				<div class="logo">
					<img src="img/Escudo-Mini.png" alt="">
						<div class="menu">
						<!-- <input type="checkbox" id="check-menu"> Boton de seleccion
						<label id="label-check">
						<i class="fa-solid fa-bars icon-menu"></i>
						</label> -->
			
					<nav>
						<ul>
							<li><a href="#">INICIO</a></li>
							
							<li><a href="#".html>ADMISIONES</a></li>
							<li><a href="#">GIMNASIO CRISTIANO</a>
								<ul>
									<li><a href="#">Quienes somos</a></li>
									<li><a href="menu_items/directivos.php">Directivos</a></li>
									<li><a href="#">Principios</a></li>
								</ul>
							</li>

							<li><a href="#">PROYECTO PILEO</a>
								<ul>
									<li><a href="#">Proyecto Espiritual y Axiológico</a></li>
									<li><a href="#">Proyecto del Buen Uso y Manejo del Tiempo Libre</a></li>
									<li><a href="#">Proyecto de Integración Bíblica Curricular</a></li>
									<li><a href="#">Proyecto De Educación Sexual</a></li>
									<li><a href="#">Proyecto Ambiental Y Ecológico</a></li>
								</ul>
								<li><a href="#">INGRESO</a>
									<ul>
										<li><a href="menu_items/docentes.php">Docentes</a></li>
										<li><a href="menu_items/estudiantes.php">Estudiantes</a></li>                  
									</ul>
								</li>    
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

	<div id="content_principal_container">
		<div class="slider-wrapper theme-mi-slider">
			<div id="slider" class="nivoSlider">				     
  <img src="img/recort/gimnacio-1.jpg" alt="" title="#htmlcaption1" />    
  <img src="img/recort/gimnacio-2.jpg" alt="" title="#htmlcaption2" />    
  <img src="img/recort/gimnacio-3.jpg" alt="" title="#htmlcaption3" />
	<img src="img/recort/gimnacio-4.jpg" alt="" title="#htmlcaption1" />    
  <img src="img/recort/gimnacio-5.jpg" alt="" title="#htmlcaption2" />    
  <img src="img/recort/gimnacio-6.jpg" alt="" title="#htmlcaption3" />
	<img src="img/recort/gimnacio-7.jpg" alt="" title="#htmlcaption1" />    
  <img src="img/recort/gimnacio-8.jpg" alt="" title="#htmlcaption2" />         
			</div> 
				
			<div id="htmlcaption1" class="nivo-html-caption">     
				<h1>Gimnasio Cristiano
					Luz Y Vida</h1>
				<p>
					"Educación Cristiana de Calidad, Sembrando en la Niñez
					y la Juventud Semillas de Amor, Perdón y Sabiduría</p>
			</div>
				
			<div id="htmlcaption2" class="nivo-html-caption">     
				<h1>Icfes categoría superior A</h1>
			</div>
			<div id="htmlcaption3" class="nivo-html-caption">     
				<h1>Gracias por visitar</h1>
			</div>
	</div>

	<footer>
    <div class="container__footer" id="container__footer__index">
        <div class="box__footer">
            <div class="logo">
                <img src="img/Escudo-Mini.png" alt="">
            </div>
            <div class="terms">
                <p>PEI "Educación Cristiana de Calidad, Sembrando en la Niñez y la Juventud Semillas de Amor, Perdón y Sabiduría". </p>
            </div>
        </div>
        <div class="box__footer">
            <h2>Enlaces Destacados</h2>
            <a href="#">Pagos En Linea</a>
            <a href="#">Admisiones</a>
            <a href="#">Estudiantes</a>
            <a href="#">Habeas Data</a>
        </div>

        <div class="box__footer">
            <h2>Compañia</h2>
            <a href="#">Acerca de</a>
            <a href="#">Padres</a>
            <a href="#">Covid-19</a>
            <a href="#">Servicios</a>
        </div>

        <div class="box__footer">
            <h2>Redes Sociales</h2>

            <a href="https://www.facebook.com/GimCristianoLuzyVida" target="_blank">
              <img src="img/facebook_icon.png" id="facebook_icon">
              <p id="facebook_name">Facebook</p>
            </a>
            <a href="https://www.instagram.com/gimcristianoluzyvida" target="_blank">
              <img src="img/instagram_icon.png"  id="instagram_icon">
              <p id="instagram_name">Instagram</p>
            </a>
        </div>
            
    </div>
    
    <div class="box__copyright">
        <hr>
        <img src="img/copyrigth_icon.png" id="copyrigth_icon">
        <p>Todos los derechos reservados 2022
        <b>SENA GIRON SANTANDER</b></p>            
    </div>
</footer>
<script src="js/script.js"></script>
</div>

</body>
</html5>
</body>
</html>