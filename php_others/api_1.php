<?php
    include('conexion.php');
    header('Content-Type: application/json');
    $_DATA = ($_SERVER["REQUEST_METHOD"] == "POST") 
            ? json_decode(file_get_contents("php://input"), true)
            : (array) null;
    extract($_DATA);
    switch ($metodo) {
        case 'login':
            include('usuario_1.php');
            print_r(Usuario::getInstance()->login($user, $password));
            break;

            # code...
            break;
    }
    
?>