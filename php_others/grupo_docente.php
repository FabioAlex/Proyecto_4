<?php
    class GrupoDocente{
        public static $_instance;
        public static function getInstance() {
            if ( !(self::$_instance instanceof self) ) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        public function GrupoDocente($grupo_docente){
            $sql = "SELECT @i:=@i + 1 Número, grupo.nombre_grupo Grupo FROM docente INNER JOIN grupo_docente ON docente.id_docente = grupo_docente.fk_id_docente_gd INNER JOIN grupo ON grupo_docente.fk_id_grupo_gd = grupo.id_grupo CROSS JOIN (select @i := 0) r WHERE docente.id_docente=$grupo_docente";
            $data = Conexion::getInstance()->BD()->prepare($sql);
            $data->execute();
            $file = $data->fetchALL(PDO::FETCH_ASSOC);
            if(!empty($file)){
                return json_encode([
                    "Mensaje" => "Grupo encontrados",
                    "Data" => $file
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }else{
                return json_encode([
                    "Mensaje" => "El usuario no tiene grupos asociados",
                    "Data" => $file
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }
            
        }
    }
?>