<?php
 session_start();
 $cz=$_SESSION['cz'];
  
 $connect = mysqli_connect("localhost", "root", "", "servicio_social");  
 $query ="SELECT * FROM alumno WHERE cz=$cz ORDER BY id_alumno DESC";  
 $result = mysqli_query($connect, $query);  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Servicio Social | Prestatarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
</head><body>
<?php include 'menucz.php';?>
<br>
<div class="container">
<a href="nuevo_prestatario_cz.php" class="btn btn-primary btn-sm">Nuevo Prestatario</a>
<br>
<br>
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
		
            <tr>
			    <th>Nombre</th>
				<th>CZ</th>
				<th>CURP</th>
				<th>Matricula</th>
				<th>Escuela</th>
				<th>Carrera</th>
				<th>Prestacion</th>
				<th>Tipo de Servicio</th>
				<th>fecha de captura</th>
				<th></th>
			</tr>
		</thead>
        <tbody>
            <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>   
                                    <td>'.$row["nombre"].'</td>  
                                    <td>'.$row["cz"].'</td>  
                                    <td>'.$row["curp"].'</td>  
                                    <td>'.$row["matricula"].'</td>  
                                    <td>'.$row["escuela"].'</td>  
                                    <td>'.$row["carrera"].'</td>  
                                    <td>'.$row["prestacion"].'</td>  
                                    <td>'.$row["tipo_serv"].'</td>  
                                    <td>'.$row["f_captura"].'</td>  
                                    <td><a href="documentacion_cz.php?id='.$row["id_alumno"].'" class="btn btn-success btn-sm">Documentacion</a>
									&nbsp;
									<a href="aceptacion_cz.php?id='.$row["id_alumno"].'" class="btn btn-info btn-sm">Aceptacion</a>
									&nbsp;
									<a href="editar_prestatario_cz.php?id='.$row["id_alumno"].'" class="btn btn-warning btn-sm">Editar</a>
									&nbsp;
									<a href="eliminarprestatario_cz.php?id='.$row["id_alumno"].'" class="btn btn-danger btn-sm">Eliminar</a></td>  
                                    
                               </tr>  
                               ';  
                          }  
                          ?>  
            
        </tbody>
    </table>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
	$(document).ready(function() {
	    var table = $('#example').DataTable( {
	        lengthChange: false,
	        buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
	    } );
	 
	    table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
	} );
     </script>
</body>
</html>