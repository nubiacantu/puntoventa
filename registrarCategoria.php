<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrar Categoria</title>
    <?php
        include('head.php');
    ?>
    <link rel="stylesheet" type="text/css" href="css/estilosRegTien.css">
    <!-- Icons. Uncomment required icon fonts -->
    

    
</head>
<body>
    <?php
        include('aside.php');
    ?>
    <div style="display: flex;">
        <!-- Galería de imágenes en el lado izquierdo -->
        <div style="width: 20%; margin-top: 3%;margin-left: 5%">
            <ul class="galeria">
                <li>
                    <img src="img/9.png" alt="Imagen 1">
                </li>
                <li>
                    <img src="img/10.png" alt="Imagen 2">
                </li>
                <li>
                    <img src="img/11.png" alt="Imagen 3">
                </li>
                <!-- Agrega más elementos <li> para más imágenes -->
            </ul>
            <!-- Aquí puedes agregar tu código HTML para la galería de imágenes -->
        </div>
        <div style="margin-left: 10%;margin-top: 3%;text-align: right;">
            <h1>REGISTRAR CATEGORÍA</h1>
            <div class="center">
                <div class="lineaTienda"></div>
        </div>
        <br><br>
        <!-- formulario  -->
        <div class="wrapper">
        <!-- Main content -->
            <div class="container-fluid">
                <div class="row" style="display: flex; justify-content: center; align-items: center;">
                <!-- left column -->
                    <div class="col-md-9" >
                        <div class="card card-primary" style="font-size: 20px; width: 600px;"> <!-- Cambia el valor del width a tu preferencia -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form name="form1" method="post" action="controlador/registrarCategoria.php">
                                <br>  
                            <!-- /.card-body -->
                                <center>
                                <div class="card-body" style="font-size: 20px;">
                                    <!-- apartado de Ingresar clave -->
                                    <div class="form-group" id="nombreCategoriadiv">
                                        <label class="form-label" for="nombreCategoria">Nombre de la Categoria</label>
                                        <div class="input-group input-group-merge">
                                            <span  id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-store"></i></span>
                                            <input 
                                            type="text" name="nombreCategoria"  id="nombreCategoria"
                                            class="form-control"
                                            id="basic-icon-default-fullname"
                                            placeholder="Nombre de la categoria"
                                            aria-label="Nombre de la categoria"
                                            aria-describedby="basic-icon-default-fullname2"
                                            />
                                        </div>
                                        <div id="datosw" class="invalid-feedback">
                                            Los datos son obligatorios
                                        </div>
                                    </div>
                                    <!-- apartado de Ingresar clave -->
                                    <div class="form-group" id="descripciondiv">
                                        <label class="form-label" for="descripcion">Descripcion</label>
                                        <div class="input-group input-group-merge">
                                            <span  id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-file"></i></span>
                                            <input 
                                            type="text" name="descripcion"  id="descripcion"
                                            class="form-control"
                                            id="basic-icon-default-fullname"
                                            placeholder="Descripcion"
                                            aria-label="Descripcion"
                                            aria-describedby="basic-icon-default-fullname2"
                                            />
                                        </div>
                                        <div id="datosw" class="invalid-feedback">
                                            Los datos son obligatorios
                                        </div>
                                    </div>
                                    
                                </div>
                                </center>
                                <!-- /.card-body -->
                                <!-- Apartado de botones de enviar y eliminar-->
                                <div style="display: flex; justify-content: center; " > 
                                    <button type="submit" id="botonEnviar" class="btn btn-primary botonRegistrar" style="background-color: #D7B33A;border: 1px solid #D7B33A;">Enviar</button>
                                </div>
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

</body>
</html>