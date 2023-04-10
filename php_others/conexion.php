<?php
    class Conexion{
        public static $_instance;
        public static function getInstance() {
            if ( !(self::$_instance instanceof self) ) {
                self::$_instance = new self();
                
            }
            return self::$_instance;
        }
        public function BD(){
            $usuario = (string) "root";
            $contrasena = (string) "";
            $namedb = (string) "colegio";
            return new PDO("mysql:host=localhost;dbname=$namedb", $usuario, $contrasena);
        }
    }
    
   
    
?>