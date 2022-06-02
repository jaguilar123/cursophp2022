<?php 

include_once '../07-documentos/db.php';

//var_dump();

//tabla de la BD
$tabla = "documentos";

//direcctorio donde se guardara el archivo
$uploadDir = "uploads";

if (!empty($_FILES['file']['name'])) {
   
    //asignar esas variables
    $tmpFile = $_FILES['file']['tmp_name'];
    $tmpType = $_FILES['file']['type'];
    $tmpSize = $_FILES['file']['size'];

    //subimos el archivo
    //cambiar el nombre del archivo
    $fileName = time().'-'.$_FILES['file']['name'];
    $urlDoc = $uploadDir.'/'.$fileName;


    //obtener el MIME

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $fileContents = file_get_contents($tmpFile);
    $mimeType = $finfo->buffer($fileContents);


    //Validamos las extensiones

    $extensionesValidas = ["image/jpeg","image/png","image/jpg","application/pdf"];

    //mover el directorio temporal al nuevo directorio
    move_uploaded_file($tmpFile,$urlDoc);

    $cadena = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, url, file, type, size) VALUES (:name, :url, :file, :type, :size)");

    $cadena->bindParam(":name",$fileName, PDO::PARAM_STR);
    $cadena->bindParam(":url",$urlDoc, PDO::PARAM_STR);
    $cadena->bindParam(":file",$tmpFile, PDO::PARAM_STR);
    $cadena->bindParam(":type",$fileType, PDO::PARAM_STR);
    $cadena->bindParam(":size",$fileSize, PDO::PARAM_STR);

    if ($cadena->execute()) {
        header("location:index.php?mensaje=ok");
    }else {
         header("location:index.php?mensaje=error");
    }

    $cadena = null;

}


?>