<?php 


// trabaja con arreglos
$colores = array("rojo", "verde","amarillo");

foreach($colores as $key =>$value){
    echo $key."=>".$value;
    echo"<br>";
}

// otra manera de recorrer el arreglon es

foreach ($colores as $value) 
{
    echo $value;
    echo"<br>";
}

