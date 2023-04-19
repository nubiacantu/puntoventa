<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Producto</title>
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
    <div style="margin-left: 8%;margin-top: 3%">
        <h1>EDITAR PRODUCTO</h1>
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
                                    <label for="codigo" style="text-align: center;">Código de Productos:<span class="obligatorio">(*)</span></label>
                                    <input type="number" class="form-control m-2 input" name="codigo"  id="codigo" placeholder="Ingrese el Código" aria-describedby="datosw" required>

                                    <label for="nombre" style="text-align: center;">Nombre:<span class="obligatorio">(*)</span></label>
                                    <input type="text" class="form-control m-2 input" name="nombre"  id="nombre" placeholder="Ingrese el nombre" aria-describedby="datosw" required>

                                    <label for="precio" style="text-align: center;">Precio:<span class="obligatorio">(*)</span></label>
                                    <input type="text" class="form-control m-2 input" name="precio"  id="precio" placeholder="Ingrese el precio" aria-describedby="datosw" required>

                                    <div class="form-group">
                                        <label for="categoria" style="text-align: center;">Categoría:<span class="obligatorio">(*)</span></label>
                                        <select class="form-control input select2" style="border: 2px solid #23929F;text-align: left;" id="categoria" style="width: 100%;">
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
                                    <input type="number" class="form-control m-2 input" name="stock"  id="stock" placeholder="Ingrese el stock" aria-describedby="datosw" required>

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