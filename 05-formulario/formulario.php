<!doctype html>
<html lang="en">

<head>
    <title>Formulario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-12">
                <h2>Formularios con PHP</h2>
            </div>

            <div class="col-12">

                <form action="recibe.php" method="post" enctype="multipart/form-data">

                    <!-- input texto -->
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre"
                            placeholder="Ingrese el nombre de usuario">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <!-- input password -->
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingrese el password">
                    </div>

                    <!-- input checkbok -->
                    <h4>Pasatiempos</h4>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="pasatiempos[]" value="deportes">
                            Deportes
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="pasatiempos[]" value="cocina">
                            Cocinar
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="pasatiempos[]" value="estudiar">
                            Estudiar
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="documento">Tipo de documento</label>
                        <select class="form-control" name="documento">
                            <option selected>---</option>
                            <option value="cedula">Cedula</option>
                            <option value="Pasaporte">Pasaporte</option>
                            <option value="Licencia">Licencia de conducir</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Mascotas</label>
                        <select multiple class="form-control" name="mascota[]" id="">
                            <option value="perro">Perro</option>
                            <option value="gato">Gato</option>
                            <option value="canario">Canario</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="" rows="3" maxlength="100"
                            placeholder="Escriba no mas de 100 caracteres"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="file" class="form-control-file" name="fileImagen">
                        <small id="fileHelpId" class="form-text text-muted">Subir Imagen aqui</small>
                    </div>
                    <h4>Genero</h4>
                    <div class="input-group">
                        <label class="form-check-label">
                            <span class="input-group-addon">
                                <input type="radio" name="sexo" aria-label="" value="masculino">
                            </span>
                            Masculino
                        </label>
                    </div>
                    <div class="input-group">
                        <label class="form-check-label">
                            <span class="input-group-addon">
                                <input type="radio" name="sexo" aria-label="" value="Femenino">
                            </span>
                            Femenino
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-2 mb-5">Enviar</button>


                </form>

            </div>

        </div>



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