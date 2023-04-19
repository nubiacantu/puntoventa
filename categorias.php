<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categorías</title>

  
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
  	<h1>CATEGORÍAS</h1>
  	<div class="center">
  		<div class="linea"></div>
  	</div>
  	<div class="col-12" style="margin-top: 3%">
  		<div class="col-10 mx-auto">
	  		<div class="row">
	  				<div class="card" style="width: 100%;">
					  <div class="card-body">
					  	<div class="row mb-2" >
						  <div class="col">
						    <label for="cantidad-entradas" style="display: inline-block; margin-right: 5px;">Mostrar</label>
						    <input type="number" class="form-control" id="cantidad-entradas" name="cantidad-entradas" style="display: inline-block; width: 6%; margin-right: 5px;">
						    <label for="cantidad-entradas" style="display: inline-block;">cantidad de entradas</label>
						  </div>
						</div>
					    <table id="example2" class="table table-bordered table-hover">
		                  <thead>
		                  <tr>
		                    <th>Nombre</th>
		                    <th>Descripción</th>
		                    <th>Fecha</th>
		                    <th></th>
		                  </tr>
		                  </thead>
		                  <tbody>
		                  <?php
		                  	include ('controlador/mostrarCategoria.php');
		                  ?>
		                  </tbody>
		                  
		                </table>
					  </div>
					</div>
					<div style="display: flex; justify-content: center">
						<a href = "registrarCategoria.php"class="btn btn-circle imagen-boton" style="margin-right: 10px; border-radius: 50%">    
						   <i class="fa-solid fa-plus"></i>
						</a>
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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
