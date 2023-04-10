<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <title>Colegio Gimnasio Cristiano Luz y Vida</title>
   
    <script src="https://kit.fontawesome.com/402c9c86f2.js" crossorigin="anonymous"></script>
</head>
<body id="body">

<header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <p class="header__type">Docente</p>
        <div class="header__content__end">
        <img src="multimedia\logo_gimnasio.png" class="header__img">
        <button type="button" id="header__button">Cerrar sesión</button>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-graduation-cap"></i>
            <h4>Gimnasio Cristiano</h4>
        </div>

    <div class="options__menu">

        <a href="#" class="selected">
            <div class="option">
            <i class="fa-solid fa-house" title="Inicio"></i>
            <h4>Inicio</h4>
            </div>
        </a>

        <a href="archives_php_1/talleres.php">
            <div class="option">
            <i class="fa-solid fa-list-check" title="Talleres"></i>
            <h4>Talleres</h4>
            </div>
        </a>

        <a href="archives_php_1/notas.php">
            <div class="option">
            <i class="fa-solid fa-clipboard-check" title="Notas"></i>
            <h4>Notas</h4>
            </div>
        </a>

        <a href="archives_php_1/informes.php">
            <div class="option">
            <i class="fa-solid fa-address-book" title="Informes finales"></i>
            <h4>Informes Finales</h4>
            </div>
        </a>

        <a href="archives_php_1/ayuda.php">
            <div class="option">
            <i class="fa-solid fa-circle-info" title="Ayuda"></i>
            <h4>Ayuda</h4>
            </div>
        </a>

    </div>
</div>

<main id="main_content">
<h2>Inicio</h2>

</main>


<script src="js/script.js"></script>
</body>
</html>