<?php 

//validar si cumple o no cumple una condicion


$edad = 20;

if ($edad >=18){

    echo "Cumple con edad estipulada";
    
} else{
    echo "No tiene la edad recomendada";
}

echo "<br>*********************************<br>";

$poseeCedula = true;

if ($edad >= 18 && $poseeCedula) {
    echo "Puede ingresar";
}
else {
    echo "No puede ingresar";
}
echo "<br>*********************************<br>";

//si el dato es nulo

$nombreCompleto = null;

if (is_null($nombreCompleto)) {
    echo "vacio";
}
else {
    echo $nombreCompleto;
}
echo "<br>*********************************<br>";
//si el dato es vacio

$nombreCompleto = "";

if ($nombreCompleto == "") {

    echo "vacio";
}
else {
    echo $nombreCompleto;
}

echo "<br>*********************************<br>";