<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ventas</title>
  
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="css/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="css/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="css/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <?php
    include('head.php');
  ?>
</head>
<body >
  <?php
    include('aside.php');
  ?>
  <div style="margin-left: 8%;margin-top: 3%">
  	<h1>REALIZAR VENTA</h1>
  	<div class="center">
  		<div class="linea"></div>
  	</div>
  	<div class="col-12" style="margin-top: 3%">
  		<div class="col-10 mx-auto">
	  		<div class="row">
	  				<div class="card" style="width: 100%;">
					  <div class="card-body">
					  	<div class="row mb-2">
					  		<div class="col-6" >
							  <div class="form-group">
                                    <label for="categoria" style="text-align: center;">Producto:<span class="obligatorio"></span></label>
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
					  		</div>
					  		<div class="col-6" >
							  <div class="form-group">
								<div class="input-group mb-3"  id="precio">
									<span style="background-color: #23929F;border: 1px solid #23929F;" class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
									<input type="text" class="form-control input" name="precio"  id="precio" placeholder="Ingrese el precio" aria-describedby="datosw" required>
								</div>
								</div>
					  		</div>
					  			<div style="margin-top: auto; text-align: right; text-align: right; align-items: right; justify-content: right; display: flex">
					  				<button class="btn acceder" id="editarStock" style="border-radius: 15px; margin-right: 10%">
						  				Editar Stock
						  			</button>
					  			</div>
					  		</div>

					  	</div>	
					  	<div class="row mb-2" >
						  <div class="col">
						    <label for="cantidad-entradas" style="display: inline-block; margin-right: 5px;">Mostrar</label>
						    <input type="number" class="form-control" id="cantidad-entradas" name="cantidad-entradas" style="display: inline-block; width: 6%; margin-right: 5px;" min="0">
						    <label for="cantidad-entradas" style="display: inline-block;">cantidad de entradas</label>
						  </div>
						</div>
					    <table id="example2" class="table table-bordered table-hover">
		                  <thead>
		                  <tr>
		                    <th>Fecha</th>
		                    <th>Nota</th>
		                    <th>Referencia</th>
		                    <th>Cantidad</th>
		                  </tr>
		                  </thead>
		                  <tbody>
		                  <tr>
		                    <td>Trident</td>
		                    <td>Internet
		                      Explorer 4.0
		                    </td>
		                    <td>Win 95+</td>
		                    <td>Win 95+</td>
		                  </tr>
		                  <tr>
		                    <td>Trident</td>
		                    <td>Internet
		                      Explorer 5.0
		                    </td>
		                    <td>Win 95+</td>
		                    <td>Win 95+</td>
		                  </tr>
		                  <tr>
		                    <td>Trident</td>
		                    <td>Internet
		                      Explorer 5.5
		                    </td>
		                    <td>Win 95+</td>
		                    <td>Win 95+</td>
		                  </tr>
		                  <tr>
		                    <td>Trident</td>
		                    <td>Internet
		                      Explorer 6
		                    </td>
		                    <td>Win 98+</td>
		                    <td>Win 95+</td>
		                  </tr>
		                  </tbody>
		                  
		                </table>
					  </div>
					</div>
					
	  		</div>
	  	</div>
  	</div>
  	
  	

  </div>
  

  <?php
    include('foot.php');
  ?>
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
<script src="js/modalEditar.js"></script>

</body>
</html>
