<!DOCTYPE html>
<html lang="en">
<head>
  <title>Historial Ventas</title>

  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="css/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="css/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte/dist/css/adminlte.min.css">
  <?php
    include('head.php');
  ?>
</head>
<body >
  <?php
    include('aside.php');
  ?>
  <div style="margin-left: 8%;margin-top: 3%">
  	<h1>HISTORIAL DE VENTAS</h1>
  	<div class="center">
  		<div class="linea"></div>
  	</div>
  	<div class="col-12" style="margin-top: 3%">
  		<div class="col-10 mx-auto">
	  		<div class="row">
	  				<div class="card" style="width: 100%;">
					  <div class="card-body">
					  	<div class="row mb-2" >
						  <div class="col-5">
						    <label for="cantidad-entradas" style="display: inline-block; margin-right: 5px;">Mostrar</label>
						    <input type="number" class="form-control" id="cantidad-entradas" name="cantidad-entradas" style="display: inline-block; width: 	15%; margin-right: 5px;" min="0">
						    <label for="cantidad-entradas" style="display: inline-block;">cantidad de entradas</label>
						  </div>
						  <div class="col-7" style=" display: flex; justify-content: right; align-items: center">
						  	<label for="cantidad-entradas" style="display: inline-block; margin-right: 10px;">De</label>
						    <input type="date"  class="form-control" id="fechaInicio" name="fechaInicio" style="display: inline-block; margin-right: 5px; width: 20%;">
						    <label for="cantidad-entradas" style="display: inline-block; margin-right: 10px;">A</label>
							<input type="date"  class="form-control" id="fechaFin" name="fechaFin" style="display: inline-block; margin-right: 5px; width: 20%;">
						  </div>
						</div>
					    <table id="example1" class="table table-bordered table-hover">
		                  <thead>
		                  <tr>
		                    <th>ID</th>
		                    <th>Fecha</th>
		                    <th>Subtotal</th>
		                    <th>IVA</th>
		                    <th>Total</th>
		                    <th></th>
		                  </tr>
		                  </thead>
		                  <tbody>
		                  <tr>
		                    <td>Trident</td>
		                    <td>Internet
		                      Explorer 4.0
		                    </td>
		                    <td>Win 95+</td>
		                    <td>Internet
		                      Explorer 4.0
		                    </td>
		                    <td>Win 95+</td>
		                    <td style="width: 20%;"> 
		                    	<div style="display: flex; justify-content: center;">
								  <!-- Botón ver -->
								  <a class="btn acceder" style="border-radius: 15px;">
								    Ver
								  </a>
								</div>
		                    </td>
		                  </tr>
		                  <tr>
		                    <td>Trident</td>
		                    <td>Internet
		                      Explorer 5.0
		                    </td>
		                    <td>Win 95+</td>
		                    <td>Internet
		                      Explorer 4.0
		                    </td>
		                    <td>Win 95+</td>
		                    <td style="width: 20%;"> 
		                    	<div style="display: flex; justify-content: center;">
								  <!-- Botón ver -->
								  <a class="btn acceder" style="border-radius: 15px;">
								    Ver
								  </a>
								</div>
		                    </td>
		                  </tr>
		                  <tr>
		                    <td>Trident</td>
		                    <td>Internet
		                      Explorer 5.5
		                    </td>
		                    <td>Win 95+</td>
		                    <td>Internet
		                      Explorer 4.0
		                    </td>
		                    <td>Win 95+</td>
		                    <td style="width: 20%;"> 
		                    	<div  style="display: flex; justify-content: center;">
								  <!-- Botón ver -->
								  <a class="btn acceder" style="border-radius: 15px;">
								    Ver
								  </a>
								</div>
		                    </td>
		                  </tr>
		                  <tr>
		                    <td>Trident</td>
		                    <td>Internet
		                      Explorer 6
		                    </td>
		                    <td>Win 98+</td>
		                    <td>Internet
		                      Explorer 4.0
		                    </td>
		                    <td>Win 95+</td>
		                    <td style="width: 20%;"> 
		                    	<div style="display: flex; justify-content: center;">
								  <!-- Botón ver -->
								  <a class="btn acceder" style="border-radius: 15px;">
								    Ver
								  </a>
								</div>
		                    </td>
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
  <!-- DataTables  & Plugins -->
<script src="css/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="css/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="css/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="css/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="css/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="css/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="css/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="css/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="css/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="css/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="css/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="css/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="css/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="css/adminlte/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="js/modal.js"></script>
</body>
</html>
