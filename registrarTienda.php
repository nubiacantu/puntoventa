<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrar tienda</title>
    <?php
        include('head.php');
    ?>
    <link rel="stylesheet" type="text/css" href="css/estilosRegTien.css">
    <!-- Icons. Uncomment required icon fonts -->
   
    
</head>
<body>
    <?php
        include('asideSuper.php');
    ?>
    <div style="display: flex;">
        <!-- Galería de imágenes en el lado izquierdo -->
        <div style="width: 20%; margin-top: 3%;margin-left: 5%">
            <ul class="galeria">
                <li>
                    <img src="img/6.png" alt="Imagen 1">
                </li>
                <li>
                    <img src="img/7.png" alt="Imagen 2">
                </li>
                <li>
                    <img src="img/8.png" alt="Imagen 3">
                </li>
                <!-- Agrega más elementos <li> para más imágenes -->
            </ul>
            <!-- Aquí puedes agregar tu código HTML para la galería de imágenes -->
        </div>
        <div style="margin-left: 10%;margin-top: 3%;text-align: right;">
            <h1>Registrar Tienda</h1>
            <div class="center">
                <div class="linea"></div>
        </div>
        <br><br>
        <!-- formulario  -->
        <div class="wrapper">
        <!-- Main content -->
            <div class="container-fluid">
                <div class="row" style="display: flex; justify-content: center; align-items: center;">
                <!-- left column -->
                    <div class="col-md-8" >
                        <div class="card card-primary" style="font-size: 20px; width: 500px;"> <!-- Cambia el valor del width a tu preferencia -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="form1" name="form1" method="post" action="controlador/registrarTienda.php">
                                <br>  
                            <!-- /.card-body -->
                                <center>
                                <div class="card-body" style="font-size: 20px;">
                                        <!-- apartado de Ingresar clave -->
                                        <div class="form-group" id="nombrediv">
                                            <label class="form-label" for="nombre">Nombre de la tienda</label>
                                            <div class="input-group input-group-merge">
                                                <span  id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-store"></i></span>
                                                <input 
                                                type="text"
                                                class="form-control"
                                                id="nombre"
                                                name="nombre" 
                                                placeholder="Nombre de la tienda"
                                                aria-describedby="datosw" required="required" 
                                                />
                                            </div>
                                            <div id="datosw" class="invalid-feedback">
                                                Los datos son obligatorios
                                            </div>
                                        </div>
                                        <div class="form-group" id="activadiv">
                                            <label for="Activada" style="text-align: center;">Activa:</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="activaRadio" id="activa" aria-describedby="datosw" value="activa" required>
                                                <label class="form-check-label" for="activa">Activada</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="activaRadio" id="desactiva" aria-describedby="datosw" value="desactivada" required>
                                                <label class="form-check-label" for="desactiva">Desactivada</label>
                                            </div>
                                            <div id="datosw" class="invalid-feedback">
                                                Los datos son obligatorios
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <!-- Apartado de botones de enviar y eliminar-->
                                        <div style="display: flex; justify-content: center; " > 
                                            <button type="submit" id="botonEnviar" class="btn btn-primary botonRegistrar" style="background-color: #D7B33A;border: 1px solid #D7B33A;" onclick="registrarTienda()">Enviar</button>
                                        </div>
                                </div>
                                </center>
                                
                                <br>
                            </form>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ./wrapper -->
    </div>
    <script src="js/validar.js"></script>
</body>
</html>