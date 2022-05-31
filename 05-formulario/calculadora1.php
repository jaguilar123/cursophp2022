<?php 

    //creamos la funcion
    function calculo($operandoA, $operandoB,  $calcular){

        switch ($calcular) {
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

	$operandoA=$_POST['operandoA'];
	$operandoB=$_POST['operandoB'];
    $calcular=$_POST['btncalcular'];

    if($operandoA !="" && $operandoB != ""){

        $operacion = calculo($operandoA, $operandoB, $calcular);

        $resultado = $operacion;
    }
    } 

        
    
?>


<!doctype html>
<html lang="en">

<head>
    <title>Calculadora</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container" style="background-color:#ccdbdc">
        <h1 class="titulo text-center my-4">Aplicacion Calculadora con PHP</h1>

        <form method="post">
            <div class="form-group">
                <label for="operandoA">Operando A</label>
                <input type="number" class="form-control" name="operandoA" id="" placeholder="ingrese el primer digito" step= "any" value="<?php if(isset($_POST['operandoA'])) { echo $_POST['operandoA']; } ?>">
            </div>

            <div class="form-group">
                <label for="operandoB">Operando B</label>
                <input type="number" class="form-control" name="operandoB" id=""
                    placeholder="ingrese el segundo digito" step= "any" value="<?php if(isset($_POST['operandoB'])) { echo $_POST['operandoB']; } ?>">
            </div>

                       
 
         <button type="submit" class="btn btn-primary" name="btncalcular" value="sumar">Sumar</button>
         <button type="submit" class="btn btn-success" name="btncalcular" value="restar">Restar</button>
         <button type="submit" class="btn btn-secondary" name="btncalcular" value="multiplicar">Multiplicar</button>
         <button type="submit" class="btn btn-warning" name="btncalcular" value="dividir">Dividir</button>
      
           
            <div class="col-sm-6">
                <div class=" mt-4 mb-3">
                    <div class="alert alert-success h-15" role="alert">
                        <strong>RESULTADO: </strong><?php if (isset($resultado)){
                        echo $resultado;
                        }?>
                    </div>             
                </div>
            </div>

        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>