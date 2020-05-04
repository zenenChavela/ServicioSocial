<?php  
 $connect = mysqli_connect("localhost", "root", "", "servicio_social");  
 $query ="SELECT * FROM plantel ORDER BY id_plantel DESC";  
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
<?php include 'menuadmin.php';?>
<br>
<div class="container">
<a href="nuevo_plantel.php" class="btn btn-primary btn-sm">Nuevo Plantel</a>
<br>
<br>

	<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
		
            <tr>
<td>esc</td>
<td>nivel_medio</td>
<td>nivel_superior</td>
<td>director</td>
<td>calle</td>
<td>num</td>
<td>col</td>
<td>loc</td>
<td>mun</td>
<td>cp</td>
<td>tel_esc</td>
<td>ext_esc</td>
<td>email_esc</td>
<td>resp</td>
<td>cargo</td>
<td>tel_resp</td>
<td>ext_resp</td>
<td>email_resp</td>
<td>cel_resp</td>
<td></td>


			</tr>
		</thead>
        <tbody>
            <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>   

<td>'.$row["esc"].'</td>
<td>'.$row["nivel_medio"].'</td>
<td>'.$row["nivel_superior"].'</td>
<td>'.$row["director"].'</td>
<td>'.$row["calle"].'</td>
<td>'.$row["num"].'</td>
<td>'.$row["col"].'</td>
<td>'.$row["loc"].'</td>
<td>'.$row["mun"].'</td>
<td>'.$row["cp"].'</td>
<td>'.$row["tel_esc"].'</td>
<td>'.$row["ext_esc"].'</td>
<td>'.$row["email_esc"].'</td>
<td>'.$row["resp"].'</td>
<td>'.$row["cargo"].'</td>
<td>'.$row["tel_resp"].'</td>
<td>'.$row["ext_resp"].'</td>
<td>'.$row["email_resp"].'</td>
<td>'.$row["cel_resp"].'</td>
<td>
<a href="editar_plantel.php?id='.$row["id_plantel"].'" class="btn btn-warning btn-sm">Editar</a>
&nbsp;
<a href="eliminarplantel.php?id='.$row["id_plantel"].'" class="btn btn-danger btn-sm">Eliminar</a></td>
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
	        buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis' ]
	    } );
	 
	    table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
	} );
     </script>
</body>
</html>