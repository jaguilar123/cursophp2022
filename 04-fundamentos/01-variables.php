<?php 

    $miNombre="Jonathan";

    echo $miNombre;

    //Forzar el daton con un tipado

    //(bool)
    //(int)
    //(float)
    //(string)
    //(array)
    //(object)

    $variableNumerica=(int)100;
    $variableBooleana=(bool) false;
    $variableTexto=(string)"Hola mundo";

    var_dump($variableNumerica);
    echo "<br>";
    var_dump($variableBooleana);
    echo "<br>";
    var_dump($variableTexto);
    echo "<br>";

//  variable decimales 

$base= (float)10.2;
$altura=(float)20.5;
echo "<br/>";

$areaRectangulo = $base * $altura;
echo "El area del rectangulo es = ".$areaRectangulo;
echo "<br/>";


//Area del Trinagulo

$areaTriangulo = ($base * $altura) / 2;
echo "El ara del triangulo es = ".$areaTriangulo;
echo "<br/>";


echo $evaluar = (2-5)*(5+2)*-1;
echo "<br/>";
echo "<br/>";

// SCOPE (alcance )de la variable

function MostrarTelefono(){
    
$telefono = 75756223;
echo "El numero de telefono es = ".$telefono;
echo "<br/>";

}

 MostrarTelefono();

// Variables super Global

$mensaje = "Hola mundo";
echo "<br/>";

function MostrarMensaje(){

global $mensaje;
echo "Mi mensaje es: ".$mensaje;
echo "<br/>";
}

 MostrarMensaje();



//valribles estatica
function contador(){
static $cont = 1;
echo $cont;

//incrementar la variable en 1
//$cont = $cont + 1;
$cont ++;

}

echo "<br/>";
contador();
echo "<br/>";
contador();
echo "<br/>";
contador();


//variables seteadas isset: determina si una variabla esta definida
echo "<br/>";
echo "<br/>";

$edad = 19;

//operador ternario

echo (isset($edad) and $edad > 18) ? "Es mayor de edad" : "No cumple con la edad";
echo "<br/>";