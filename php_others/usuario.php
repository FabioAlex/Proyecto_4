<?php
    class Usuario{
        public static $_instance;
        public static function getInstance() {
            if ( !(self::$_instance instanceof self) ) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        public function login($user, $password){
            $sql = "SELECT * FROM estudiante where correo_electronico_estudiante='$user' and clave_login_estudiante='$password'";
            $data = Conexion::getInstance()->BD()->prepare($sql);
            $data->execute();
            $file = $data->fetch(PDO::FETCH_ASSOC);
            if(!empty($file)){
                return json_encode([
                    "Mensaje" => "Conexion Exitosa",
                    "Data" => $file
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }else{
                return json_encode([
                    "Mensaje" => "Usuario o contraseña incorrectos",
                    "Data" => $file
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }
            
        }
    }
?>