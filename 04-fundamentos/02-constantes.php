<?php 

//DEFINAMOS CONSTANTES
//1-No necesite el simbolo $
//2-usamos el metodo llamado DEFINE
//3-Se asigna una sola vez
//4- su alcance es global


DEFINE("CUOTA",250);

$valorCuota = CUOTA;

echo "El valor de la cuota es: ".$valorCuota;
echo "<br/>";

//DEFINE("CUOTA2",10000);
//echo "El valor de la cuota es: ".CUOTA2;


//BUENAS PRACTICAS EN EL USO DE CONSTANTES

//1-Usar siempre mayusculas
//2-No usar nombre de cosntantes con _Valor_
//3-No usar nombre con guion bajo

echo "<br/>";
