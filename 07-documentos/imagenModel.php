<?php 

include_once "../07-documentos/db.php";


class ImagenModel
{
    /*Modelo subir imagenes*/
    
    public static function subirImagenModel($datosModel, $tabla)
    {
        $cadena = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, 
        url, file, type, size) VALUES (:name, :url, :file, :type, :size)");

        $cadena->bindParam(":name", $datosModel['nombre'], PDO::PARAM_STR);
        $cadena->bindParam(":url", $datosModel['url'], PDO::PARAM_STR);
        $cadena->bindParam(":file", $datosModel['file'], PDO::PARAM_STR);
        $cadena->bindParam(":type", $datosModel['type'], PDO::PARAM_STR);
        $cadena->bindParam(":size", $datosModel['size'], PDO::PARAM_STR);

        if ($cadena->execute()) {
            
            return "exitoso";

        } else {
         return "error";
        }

        $cadena = null; 
    }


    /*Modelo mostrar imagenes*/

    public static function mostrarImagenModel($tabla)
    {
        $cadena = Conexion::conectar()->prepare("SELECT id, nombre, url, update_time FROM $tabla");

        if ($cadena->execute()) {
            
            return $cadena ->fetchAll();

        } else {
         return "error";
        }

        $cadena = null; 
    }

    /*Modelo borrar imagenes*/

    public static function borrarImagenModel($url,$id,$tabla)
    {
        $cadena = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $cadena->bindParam(":id", $id, PDO::PARAM_INT);
    

        if ($cadena->execute()) {

            unlink($url);            
            return "exitoso";

        } else {
         return "error";
        }

        $cadena = null; 
    }


}

?>