<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ventas Realizadas</title>

  
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
  	<h1>VENTAS REALIZADAS</h1>
  	<div class="center">
  		<div class="linea"></div>
  	</div>
  	<div class="col-12" style="margin-top: 3%">
  		<div class="col-10 mx-auto">
	  		<div class="row">
	  				<div class="card" style="width: 100%;">
					  <div class="card-body">
					    <table id="example1" class="table table-bordered table-hover">
		                  <thead>
		                  <tr>
		                    <th>ID</th>
		                    <th>Codigo</th>
		                    <th>Nombre</th>
		                    <th>Cantidad</th>
		                    <th>Importe</th>
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
