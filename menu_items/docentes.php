<?php

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>gimnasio cristiano luz y vida</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="estudiantes, colegio, colegio cristiano luz y vida, notas">
    <meta name="description" content="plataforma para toma de notas y manejo de colegios">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_login.css">
    <script src="../js/docentes.js"></script>

</head>


<!-- Usuario valido para inicio de sesion
Correo: santiagoramirez@gmail.com
Contrasena: abcde -->

<body>

<div id="container_general">

<img src="../img/fondo_principal.png" id="fondo_general">


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
							<input type="search" placeholder="¿Qué deseas buscar?" id="search">
						</div>
				</ul>   
			</div>
			
			<div class="contenedor-menu">
				<div class="logo">
					<img src="../img/Escudo-Mini.png" alt="">
						<div class="menu">
						<!-- <input type="checkbox" id="check-menu"> Boton de seleccion
						<label id="label-check">
						<i class="fa-solid fa-bars icon-menu"></i>
						</label> -->
			
					<nav>
						<ul>
							<li><a href="../index.php">INICIO</a></li>
							
							<li><a href="#".html>ADMISIONES</a></li>
							<li><a href="#">GIMNASIO CRISTIANO</a>
								<ul>
									<li><a href="#">Quienes somos</a></li>
									<li><a href="#">Directivos</a></li>
									<li><a href="#">Principios</a></li>
								</ul>
							</li>

							<li><a href="#">PROYECTO PILEO</a>
								<ul>
									<li><a href="menu_items/espiritual_axiologico.html">Proyecto Espiritual y Axiológico</a></li>
									<li><a href="menu_items/buen_uso_manejo.html">Proyecto del Buen Uso y Manejo del Tiempo Libre</a></li>
									<li><a href="menu_items/integracion_biblica.html">Proyecto de Integración Bíblica Curricular</a></li>
									<li><a href="menu_items/educacion_sexual.html">Proyecto De Educación Sexual</a></li>
									<li><a href="menu_items/ambiental.html">Proyecto Ambiental Y Ecológico</a></li>
								</ul>
								<li><a href="#">INGRESO</a>
									<ul>
										<li><a href="#">Docentes</a></li>
										<li><a href="estudiantes.php">Estudiantes</a></li>                  
									</ul>
								</li>    
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

	<div id="content_principal_container">
<!--Inicio formulario ingreso-->
<div class="body2">
<form action="../php_others/api_1.php" method="POST" id="form" data-metodo="login">
      <h2>Ingreso exclusivo<br>para directivos y docentes<br><br><br> </h2>
      <img src="../img/usuario.png" id="usuario_login_img">
      <div class="form">
          <h1>Inicio de sesión</h1>
          <div class="grupo">
              <input type="text" name="user" id="name" required><span class="barra"></span>
              <label for="">Nombre o Usuario</label>
          </div>
          
          <div class="grupo">
              <input type="password" name="password" id="password" required ><span class="barra"></span>
              <label for="">Contraseña</label>
          </div>
          
          <input type="submit" value="Iniciar sesión">
          <p class="warnings " id="warnings"></p>
          
      </div>
    </form>
  </div>
    <!--Final formulario ingreso-->

	<footer>
    <div class="container__footer" id="container__footer__index">
        <div class="box__footer">
            <div class="logo">
                <img src="../img/Escudo-Mini.png" alt="">
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
              <img src="../img/facebook_icon.png" id="facebook_icon">
              <p id="facebook_name">Facebook</p>
            </a>
            <a href="https://www.instagram.com/gimcristianoluzyvida" target="_blank">
              <img src="../img/instagram_icon.png"  id="instagram_icon">
              <p id="instagram_name">Instagram</p>
            </a>
        </div>
            
    </div>
    
    <div class="box__copyright">
        <hr>
        <img src="../img/copyrigth_icon.png" id="copyrigth_icon">
        <p>Todos los derechos reservados 2022
        <b>SENA GIRON SANTANDER</b></p>            
    </div>
</footer>

</div>

</body>
</html5>
</body>
</html>

