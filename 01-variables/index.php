<?php

//variables numericas
$numero = 100;

echo "Este es un numero entero"."=".$numero;
echo "<br>";
echo "Este es un numero entero $numero";
echo "<br>";
var_dump($numero);
echo "<br>";

//variables tipo flotante (decimales)
$numero = 0.25;

echo "Este es un numero entero"."=".$numero;
echo "<br>";
echo "Este es un numero entero $numero";
echo "<br>";
var_dump($numero);
echo "<br>";

//variables tipo string (cadena de texto)
$palabra = "Lorem ipsum dolor sit amet.";

echo "Este es un numero entero"."=".$palabra;
echo "<br>";
echo "Este es un numero entero $palabra";
echo "<br>";
var_dump($palabra);
echo "<br>";

//variables tipo booleana
$verdad = TRUE;
$falso = FALSE;

echo "Este es un numero verdadero"."=".$verdad;
echo "<br>";
echo "Este es un numero falso $falso";
echo "<br>";
var_dump($falso);
echo "<br>";


//arreglos
$frutas = ["papaya","melon","sandia"];
// $animales = array();

var_dump($frutas);

echo "Este es un arreglo"."=".$frutas[1];
echo "<br>";

//arreglos asociativos con propiedades
$autos = ["toyota" =>"Land Cruiser","Hiunday" =>"Accent","Nissan"=>"Sentra"];
echo "<br>";
echo "Este es un auto modelo hiunday $autos[Hiunday]";
echo "<br>";
echo "<br>";

//objetos
$animales = (object) ["mamifero" => "vaca","insecto" => "abeja"];
echo "Este en un objeto de tipo animal = ".$animales -> mamifero;
echo "<br>";


?>