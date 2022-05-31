<?php 

//seteamos las variables
$valor="";
$desde="";
$hasta="";

//creamos la funcion para conrtir monedas

function convertir_a_metros($valor, $desde){

    switch ($desde) {

        case 'Milimetro':
            return $valor / 1000;
         break; 
         case 'Centimetro':
            return $valor / 100;
         break; 
         case 'Decimetro':
            return $valor / 10;
         break; 
         case 'Metro':
            return $valor / 1;
         break; 
         case 'Decametro':
            return $valor * 10;
         break; 
         case 'Hectometro':
            return $valor * 100;
         break; 
         case 'Kilometro':
            return $valor * 1000;
         break;   
         default:
            return 'Longitud no soportada';
         break;   
        }
    }

    function convertir_desde_hasta($valor, $hasta){

        switch ($hasta) {
    
            case 'Milimetro':
                return $valor * 1000;
             break; 
             case 'Centimetro':
                return $valor * 100;
             break; 
             case 'Decimetro':
                return $valor * 10;
             break; 
             case 'Metro':
                return $valor * 1;
             break; 
             case 'Decametro':
                return $valor / 10;
             break; 
             case 'Hectometro':
                return $valor / 100;
             break; 
             case 'Kilometro':  
                return $valor / 1000;
             break;   
             default:
                return 'Longitud no soportada';
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

        $calculoDesde = convertir_a_metros($valor, $desde);

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
        background-color: #def0fc;
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
          <h1 class="titulo text-center my-4">Conversor de Longitud con <span>PHP</span></h1>
      </header>
  </div>

    <div class="container fondo">
        <form method="POST">
        <div class="row mt-4">

                <div class="col-sm-4">
                    <div>
                        <label for="valor" class="form-label">VALOR:</label>
                        <input type="number" name="valor" class="form-control" value="<?php if(isset($_POST['valor'])) { echo $_POST['valor']; } ?>">                
                    </div>
                </div>
            
                <div class="col-sm-4">
                 <label for="desde" class="form-label">DE: </label>
                    <select class="form-select" name="desde">    
                            <option value="">--Selecciona un valor--</option>                       
                            <option value="Milimetro" <?php if (isset($_POST['desde']) && $_POST['desde'] =='Milimetro') 
                            {echo 'selected';}?> >Milímetro</option>
                            <option value="Centimetro" <?php if (isset($_POST['desde']) && $_POST['desde'] =='Centimetro') 
                            {echo 'selected';}?> >Centímetro</option>
                            <option value="Decimetro" <?php if (isset($_POST['desde']) && $_POST['desde'] =='Decimetro') 
                            {echo 'selected';}?> >Decímetro</option>
                            <option value="Metro" <?php if (isset($_POST['desde']) && $_POST['desde'] =='Metro') 
                            {echo 'selected';}?> >Metro</option>
                            <option value="Decametro" <?php if (isset($_POST['desde']) && $_POST['desde'] =='Decametro') 
                            {echo 'selected';}?> >Decámetro</option>
                            <option value="Hectometro" <?php if (isset($_POST['desde']) && $_POST['desde'] =='Hectometro') 
                            {echo 'selected';}?> >Hectómetro</option>
                            <option value="Kilometro" <?php if (isset($_POST['desde']) && $_POST['desde'] =='Kilometro') 
                            {echo 'selected';}?> >Kilómetro</option>
                    </select>
                
                
                </div>

                <div class="col-sm-4">
                <label for="desde" class="form-label">A: </label>
                        <select class="form-select" name="hasta">
                            <option value="">--Selecciona un valor--</option>  
                            <option value="Milimetro" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='Milimetro') 
                            {echo 'selected';}?> >Milímetro</option>
                            <option value="Centimetro" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='Centimetro') 
                            {echo 'selected';}?> >Centímetro</option>
                            <option value="Decimetro" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='Decimetro') 
                            {echo 'selected';}?> >Decímetro</option>
                            <option value="Metro" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='Metro') 
                            {echo 'selected';}?> >Metro</option>
                            <option value="Decametro" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='Decametro') 
                            {echo 'selected';}?> >Decámetro</option>
                            <option value="Hectometro" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='Hectometro') 
                            {echo 'selected';}?> >Hectómetro</option>
                            <option value="Kilometro" <?php if (isset($_POST['hasta']) && $_POST['hasta'] =='Kilometro') 
                            {echo 'selected';}?> >Kilómetro</option>
                        </select>              
                </div>
           
        </div>  

        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary w-100 py-4" name="validar">CONVERTIR</button>
            </div>
                
            <div class="col-sm-6">
                <div class="mb-3">
                    <!-- <label for="resultado" class="form-label">RESULTADO:</label> -->
                    <div class="alert alert-success h-100" role="alert">
                        <strong>RESULTADO: </strong> <?php if (isset($resultado)){
                        echo $resultado." ".$_POST['hasta'];}?>
                    </div>             
                </div>
            </div>
        </div> 

         </form>     
    </div>
    
  </body>
</html>