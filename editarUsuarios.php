<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Usuarios</title>
    <?php
        include('head.php');
    ?>
    <link rel="stylesheet" type="text/css" href="css/estilosRegTien.css">
</head>
<body>
    <?php
        include('aside.php');
    ?>
    <div style="margin-left: 8%;margin-top: 3%">
        <h1>EDITAR USUARIO</h1>
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
                    <div class="card card-primary" style="font-size: 20px; padding: 3%;">
                        <!-- /.card-header -->
                        
                        <!-- form start -->
                        <form name="form1" method="post" action="">
                            <!-- /.card-body -->
                            <center>
                            <div class="card-body" style="font-size: 20px;">
                                <!-- apartado de Ingresar clave -->
                                <div class="form-group" id="nombrediv">
                                    <label for="nombre" style="text-align: center;">Nombre:<span class="obligatorio">(*)</span></label>
                                    <input type="text" class="form-control m-2 input" name="nombre"  id="nombre" placeholder="Ingrese el nombre" aria-describedby="datosw" required>

                                    <label for="apellido" style="text-align: center;">Apellido:<span class="obligatorio">(*)</span></label>
                                    <input type="text" class="form-control m-2 input" name="apellido"  id="apellido" placeholder="Ingrese el apellido" aria-describedby="datosw" required>

                                    <label for="usuario" style="text-align: center;">Usuario:<span class="obligatorio">(*)</span></label>
                                    <input type="number" class="form-control m-2 input" name="usuario"  id="usuario" placeholder="Ingrese el Usuario" aria-describedby="datosw" required>

                                    <label for="password" style="text-align: center;">Contraseña:<span class="obligatorio">(*)</span></label>
                                    <input type="password" class="form-control m-2 input" name="password"  id="password" placeholder="Ingrese la contraseña" aria-describedby="datosw" required>


                                    <label for="email" style="text-align: center;">Correo electrónico:<span class="obligatorio">(*)</span></label>
                                    <input type="email" class="form-control m-2 input" name="email"  id="email" placeholder="Ingrese el email" aria-describedby="datosw" required>

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
    
</body>

</html>