<?php

$user=$_POST['user'];
$password=$_POST['password'];
session_start();
$_SESSION['user']=$user;

include('connection_db.php');

$consulta="SELECT * FROM docente where correo_electronico_docente='$user' and clave_login_docente='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../crud/index.php");
   
}else{
    ?>
    <?php
    include("../menu_items/docentes.php");
    ?>
    <style>
    .texto {
          color:red;
        font-size:14px;
    }
    .contenedor_texto{
        position: absolute;
        margin-top:-70px;
        margin-left:640px;
        z-index:0;

    }
    </style>
    <div class=contenedor_texto><p class="texto">*Usuario o contraseña incorrectos*</p></div>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
