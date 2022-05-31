<?php 

//seteamos las variables
$valor="";
$desde="";
$hasta="";

//creamos la funcion para conrtir monedas

function convertir_a_cordobas($valor, $desde){

    switch ($desde) {

        case 'dolares':
            return $valor * 35.52;
         break; 
         case 'euros':
            return $valor * 38.46;
         break; 
         case 'cordobas':
            return $valor * 1;
         break; 
         default:
            return 'valores no validos';
         break;   
        }
    }

    function convertir_desde_hasta($valor, $hasta){

        switch ($hasta) {
    
            case 'dolares':
                return $valor / 36.32;
             break; 
             case 'euros':
                return $valor / 38.46;
             break; 
             case 'cordobas':
                return $valor / 1;
             break; 
             default:
                return 'valores no validos';
             break;   
            }
        }    

 //validamos que exista a traves del metodo POST

if (isset ($_POST['validar'])) {
   
 //asignamos los datos recibidos a las variables        
	$valor=$_POST['valor'];
    $desde=$_POST['desde'];
	$hasta=$_POST['hasta'];

    if($valor !="" && $desde != "" && $hasta != ""){

        $calculoDesde = convertir_a_cordobas($valor, $desde);

        $calculoHasta = convertir_desde_hasta($calculoDesde, $hasta);

        $resultado = $calculoHasta;

}
}


?>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:400,700" rel="stylesheet">

    <title>Conversor de Longitud</title>
    <style>

      :root {
        --fuentePrimaria: 'Playfair Display', serif;
        --fuenteSecundaria: 'Raleway', sans-serif;
        --primario: #037bc0;
      }

      h2 { font-size: 3rem; }

      .titulo{
          font-family: 'Playfair Display', serif;
      }
      .titulo span {
          color: #037bc0;
      }

     
    .fondo {
        background-color: #ccff33;
    }

    .formulario{
        width: 800px;
        height: 100%;
    } 
        
    </style>
  </head>
  <body>
  <div class="container">
    <header class="header pt-4">
          <h1 class="titulo text-center my-4">Conversor de Monedas con <span>PHP</span></h1>
      </header>
  </div>

    <div class="container fondo" style= "color:#051923; border: 5px solid">
        <form method="post">
        <div class="row mt-4">

                <div class="col-sm-4">
                    <div>
                        <label for="valor" class="form-label">VALOR:</label>
                        <input type="number" name="valor" class="form-control" value="<?php if(isset($_POST['valor'])) { echo $_POST['valor']; } ?>">                
                    </div>
                </div>
            
                <div class="col-sm-4">
                 <label for="desde" class="form-label">Moneda de ingreso: </label>
                    <select class="form-select" name="desde">    
                            <option value="">--Selecciona un valor--</option>  
                            <option value="dolares" <?php if (isset($_POST['desde']) && $_POST['desde'] =='dolares') 
                            {echo 'selected';}?> >Dolares</option>
                            <option value="euros" <?php if (isset($_POST['desde']) && $_POST['desde'] =='euros') 
                            {echo 'selected';}?> >Euros</option>
                            <option value="cordobas" <?php if (isset($_POST['desde']) && $_POST['desde'] =='cordobas') 
                            {echo 'selected';}?> >Cordobas</option>
                    </select>
                </div>

                <div class="col-sm-4">
                <label for="desde" class="form-label">Moneda de destino: </label>
                        <select class="form-select" name="hasta">
                            <option value="">--Selecciona un valor--</option>  
                            <option value="dolares" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='dolares') 
                            {echo 'selected';}?> >Dolares</option>
                            <option value="euros" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='euros') 
                            {echo 'selected';}?> >Euros</option>
                            <option value="cordobas" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='cordobas') 
                            {echo 'selected';}?> >Cordobas</option>
                        </select>              
                </div>
           
        </div>  

        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary w-100 py-4 mb-2" name="validar">CONVERTIR</button>
            </div>
                
            <div class="col-sm-6">
                <div class="mb-3">
                    <!-- <label for="resultado" class="form-label">RESULTADO:</label> -->
                    <div class="alert alert-success h-100" role="alert">
                        <strong>RESULTADO: </strong> <?php if (isset($resultado)){
                        echo $resultado;
                        }?>
                    </div>             
                </div>
            </div>
        </div> 

         </form>     
    </div>
    
  </body>
</html>