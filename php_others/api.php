<?php
    include('conexion.php');
    header('Content-Type: application/json');
    $_DATA = ($_SERVER["REQUEST_METHOD"] == "POST") 
            ? json_decode(file_get_contents("php://input"), true)
            : (array) ["metodo"=> "notas", "user"=> 1];
    extract($_DATA);
    switch ($metodo) {
        case 'login':
            include('usuario.php');
            print_r(Usuario::getInstance()->login($user, $password));
            break;
        case 'notas':
            include('notas.php');
            print_r(NotasEstudiante::getInstance()->Notas($user)); 
            break;
        case 'GrupoDocente':
            include('grupo_docente.php');
            print_r(GrupoDocente::getInstance()->GrupoDocente($grupo_docente));
            break;            
        default:
            # code...
            break;
    }
    
?>