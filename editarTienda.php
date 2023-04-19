<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar tienda</title>
    <?php
        include('head.php');
    ?>
    <link rel="stylesheet" type="text/css" href="css/estilosRegTien.css">
</head>
<body>
    <?php
        include('asideSuper.php');
    ?>
    <div style="margin-left: 8%;margin-top: 3%">
        <h1>Editar Tienda</h1>
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
                <div class="col-md-6" >
                    <div class="card card-primary" style="font-size: 20px;">
                        <!-- /.card-header -->
                        
                        <!-- form start -->
                        <form name="form1" method="post" action="">
                            <!-- /.card-body -->
                            <center>
                            <div class="card-body" style="font-size: 20px;">
                                <!-- apartado de Ingresar clave -->
                                <div class="form-group" id="nombrediv">
                                    <label for="nombre" style="text-align: center;">Nombre:<span class="obligatorio">(*)</span></label>
                                    <input type="text" class="form-control m-2 input" name="nombre"  id="nombre" placeholder="Ingrese la clave" aria-describedby="datosw" required>
                                    <div id="datosw" class="invalid-feedback">
                                        Los datos son obligatorios
                                    </div>
                                </div>
                                <div class="form-group" id="activadiv">
                                    <label for="activa" style="text-align: center;">Activa:<span class="obligatorio">(*)</span></label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                                        <label class="form-check-label" for="inlineRadio2">2</label>
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
                                <button type="button" id="botonEnviar" class="btn btn-primary botonRegistrar" style="background-color: #D7B33A;border: 1px solid #D7B33A;">Enviar</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- ./wrapper -->
    
</body>
</html>