<?php
    class NotasEstudiante{
        public static $_instance;
        public static function getInstance() {
            if ( !(self::$_instance instanceof self) ) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        public function Notas($user){
            $sql = "SELECT estudiante.nombre_estudiante Nombre, estudiante.apellido_estudiante Apellido, asignatura.nombre_asignatura as Asignatura, notas.nombre_nota as'Nombre de la nota', notas.descripcion_nota as 'Descripcion de la nota',notas.valor_nota as 'Valor de la nota' FROM estudiante INNER JOIN asignatura_estudiante ON estudiante.id_estudiante = asignatura_estudiante.fk_id_estudiante_ae INNER JOIN asignatura ON asignatura_estudiante.fk_id_asignatura_ae = asignatura.id_asignatura INNER JOIN notas_asignatura ON asignatura.id_asignatura = notas_asignatura.fk_id_asignatura_na INNER JOIN notas ON notas_asignatura.fk_id_notas_na = notas.id_nota WHERE estudiante.id_estudiante=$user";
            $data = Conexion::getInstance()->BD()->prepare($sql);
            $data->execute();
            $file = $data->fetchALL(PDO::FETCH_ASSOC);
            if(!empty($file)){
                return json_encode([
                    "Mensaje" => "Notas encontrades",
                    "Data" => $file
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }else{
                return json_encode([
                    "Mensaje" => "El usuario no tiene ninguna nota",
                    "Data" => $file
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }
            
        }
    }
?>



