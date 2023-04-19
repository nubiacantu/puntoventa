<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agregar Producto</title>
     <!-- Select2 -->
      <link rel="stylesheet" href="css/adminlte/plugins/select2/css/select2.min.css">
      <link rel="stylesheet" href="css/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <?php
        include('head.php');
    ?>
    <link rel="stylesheet" type="text/css" href="css/estilosRegTien.css">
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
                    <img src="img/12.png" alt="Imagen 1">
                </li>
                <li>
                    <img src="img/13.png" alt="Imagen 2">
                </li>
                <li>
                    <img src="img/14.png" alt="Imagen 3">
                </li>
                <!-- Agrega más elementos <li> para más imágenes -->
            </ul>
            <!-- Aquí puedes agregar tu código HTML para la galería de imágenes -->
        </div>
        <div style="margin-left: 15%;margin-top: 3%;text-align: right;">
            <h1>AGREGAR PRODUCTO</h1>
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
                        <div class="card card-primary" style="font-size: 20px; padding: 3%;">
                            <!-- /.card-header -->
                            
                            <!-- form start -->
                            <form name="form1" method="post" action="">
                                <!-- /.card-body -->
                                <center>
                                <div class="card-body" style="font-size: 20px;">
                                    <!-- apartado de Ingresar clave -->
                                    <div class="form-group" id="nombrediv">
                                        <label class="form-label" for="codigo" style="text-align: center;">Código de Productos:<span class="obligatorio">(*)</span></label>
                                        <div class="input-group mb-3"  id="codigo">
                                            <span style="background-color: #23929F;border: 1px solid #23929F;" class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                                            <input type="password" class="form-control input" name="contra" id="contra" aria-label="Password" placeholder="Ingrese su contraseña"  aria-describedby="basic-addon2" required>
                                            <div id="contra2w" class="invalid-feedback">
                                            Las contraseña es obligatoria
                                            </div>
                                        </div>
                                        
                                        <label class="form-label" for="nombre" style="text-align: center;">Nombre:<span class="obligatorio">(*)</span></label>
                                        <div class="input-group mb-3"  id="nombre">
                                            <span style="background-color: #23929F;border: 1px solid #23929F;" class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                                            <input type="text" class="form-control input" name="nombre"  id="nombre" placeholder="Ingrese el nombre" aria-describedby="datosw"  aria-describedby="basic-addon2"  required>
                                            <div id="contra2w" class="invalid-feedback">
                                            Las contraseña es obligatoria
                                            </div>
                                        </div>

                                        <label for="precio" style="text-align: center;">Precio:<span class="obligatorio">(*)</span></label>
                                        <div class="input-group mb-3"  id="precio">
                                            <span style="background-color: #23929F;border: 1px solid #23929F;" class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                                            <input type="text" class="form-control input" name="precio"  id="precio" placeholder="Ingrese el precio" aria-describedby="datosw" required>
                                            <div id="contra2w" class="invalid-feedback">
                                            Las contraseña es obligatoria
                                            </div>
                                        </div>
                                    

                                        
                                        

                                        <div class="form-group">
                                            <label for="categoria" style="text-align: center;">Categoría:<span class="obligatorio">(*)</span></label>
                                            <select class="form-control input select2" id="categoria" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>

                                        <label for="stock" style="text-align: center;">Stock:<span class="obligatorio">(*)</span></label>
                                        <div class="input-group mb-3"  id="stock">
                                            <span style="background-color: #23929F;border: 1px solid #23929F;" class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                                            <input type="number" class="form-control input" name="stock"  id="stock" placeholder="Ingrese el stock" aria-describedby="datosw" required>
                                            <div id="contra2w" class="invalid-feedback">
                                            Las contraseña es obligatoria
                                            </div>
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
    </div>
    <!-- Select2 -->
    <script src="css/adminlte/plugins/select2/js/select2.full.min.js"></script>
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
        //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
      });
    </script>
</body>

</html>