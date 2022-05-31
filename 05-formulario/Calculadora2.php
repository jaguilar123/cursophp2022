<?php 
    //seteamos las variables
    $operandoA="";
    $operacion="";
    $operandoB="";

    //creamos la funcion

    function calculo($operandoA, $operandoB, $operacion){

        switch ($operacion) {
            case 'sumar':
                return $operandoA + $operandoB;
             break; 
             
             case 'restar':
                 return $operandoA - $operandoB;
             break;  
 
             case 'multiplicar':
                 return $operandoA * $operandoB;
             break; 
  
             case 'dividir':
                 return $operandoA / $operandoB;
             break;  
         default:
         return 'valores no validos';
         break;
        }


    }

    //validar
    if (isset($_POST['btncalcular'])){

    //asignamos los datos recibidos a las variables        
	$operandoA=$_POST['operandoA'];
    $operacion=$_POST['operacion'];
	$operandoB=$_POST['operandoB'];

    if($operandoA !="" && $operacion != ""){

        $calcular = calculo($operandoA, $operandoB, $operacion);

        $resultado = $calcular;
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
          color: #3a0ca3;
      }

     
    .fondo {
        background-color: #a9d6e5;
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
          <h1 class="titulo text-center my-4">Aplicacion Calculadora con <span>PHP</span></h1>
      </header>
  </div>

    <div class="container fondo" style= "color:#1b4965; border: 5px solid">
        <form method="post">
        <div class="row mt-4">

                <div class="col-sm-4">
                    <div>  <!-- VALOR -->
                        <label for="operandoA" class="form-label">VALOR:</label>
                        <input type="number" name="operandoA" class="form-control" step= "any" value="<?php if(isset($_POST['operandoA'])) { echo $_POST['operandoA']; } ?>">                
                    </div>
                </div>
            
                <div class="col-sm-4"> <!-- DESDE -->
                 <label for="operacion" class="form-label">DE: </label>
                    <select class="form-select" name="operacion">    
                            <option value="">--Selecciona un valor--</option>                       
                            <option value="sumar" <?php if (isset($_POST['operacion']) && $_POST['operacion'] =='sumar') 
                            {echo 'selected';}?> >Sumar</option>
                            <option value="restar" <?php if (isset($_POST['operacion']) && $_POST['operacion'] =='restar') 
                            {echo 'selected';}?> >Restar</option>
                            <option value="multiplicar" <?php if (isset($_POST['operacion']) && $_POST['operacion'] =='multiplicar') 
                            {echo 'selected';}?> >Multiplicar</option>
                            <option value="dividir" <?php if (isset($_POST['operacion']) && $_POST['operacion'] =='dividir') 
                            {echo 'selected';}?> >Dividir</option>
                    </select>              
                </div>

                 <div class="col-sm-4"> <!-- hasta -->
                    <div>
                        <label for="operandoB" class="form-label">VALOR:</label>
                        <input type="number" name="operandoB" class="form-control" step= "any" value="<?php if(isset($_POST['operandoB'])) { echo $_POST['operandoB']; } ?>">                
                    </div>
                </div>
           
        </div>  

        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary w-100 py-4 mb-2" name="btncalcular">CALCULAR</button>
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