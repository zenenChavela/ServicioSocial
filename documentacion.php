<?php
$idalumno=$_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "servicio_social");  
 $query ="SELECT * FROM documentacion WHERE id_alumno=$idalumno";  
 $result = mysqli_query($connect, $query); 
 
 
?>
<!doctype html>
<html lang="en">
  	<head>
	    <!--  meta tags -->
	    <meta charset="utf-8">
	    <!-- favicon -->
    	<link rel="shortcut icon" href="assets/img/favicon.png">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	    <!-- DataTables CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/css/dataTables.bootstrap4.min.css">
        <!-- datepicker CSS -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
	    <!-- Font Awesome CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.1-web/css/all.min.css">
	    <!-- Custom CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- Fungsi untuk membatasi karakter yang diinputkan -->
        <script type="text/javascript" src="assets/js/fungsi_validasi_karakter.js"></script>
        <!-- jQuery -->
        <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>

	    <title>Servicio Social | Edición Prestatario</title>
		 <style>
		  sinborde {
			border: 0;
		  }  
		 </style>
  	</head>
  	<body><div class="row">
        <div class="col-md-12">
			<div class="alert alert-info" role="alert">
  				<i class="fas fa-edit"></i>Documentación digitalizada del prestatario.  
			</div>

			<div class="card">
			  	<div class="card-body">
			    	<!--<form class="needs-validation" action="validacion_actualizar.php" method="post" enctype="multipart/form-data" novalidate>-->
			    	 	<div class="row">
						
					    	<div class="col">
							<pre><h3>Subir Documento (.pdf, .png, .jpeg)</h3></pre>
					      		<div class="form-group col-md-12">
							<?php if (isset($archivo)): ?>
							<?php if ($archivo_ok): ?>
							<strong> El archivo ha sido subido correctamente. </strong>
							<?php else: ?>
							<span style="color: #f00;"> Error al intentar subir el archivo. </span>
							<?php endif; ?>
							<?php endif; ?>
							<form method="post" action="upload.php" enctype="multipart/form-data">
							   <div class="form-group col-md-12">
							   <label> Archivo: </label>
							   <input class="form-control"  enctype="multipart/form-data" type="file" name="archivo" required="required"/></div>
							   <div class="form-group col-md-12">
								<label>Tipo de archivo:</label>
								<select class="form-control"  name="archivonombre">
								<option class="form-control" value="Carta Presentación">Carta Presentación</option>
								<option class="form-control" value="Acta de Nacimientos">Acta de Nacimientos</option>
								<option class="form-control" value="CURP">CURP</option>
								<option class="form-control" value="Fotografia">Fotografia</option>
								<option class="form-control" value="Convenio">Convenio</option>
								</select>
								<input type='hidden' class='form-control' name='idalumno'  value="<?=$idalumno?>" style="" >
								</div>
							   <p>
							   <input type="submit" class="btn btn-primary btn-submit" value="Subir Archivo" />
							   </p>
							</form>
							<table class="table table-hover">
							<thead>
							  <tr>
								<th>Archivo</th>
								<th></th>
								<th></th>
								
							  </tr>
							</thead>
							<tbody>
							  <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr> 
							    <td>'.$row["docmento"].'</td>
								<td><a href="'.$row["ruta"].'" target="_blank">'.$row["ruta"].'</a></td>
								<td><a href="eliminardocumento.php?idoc='.$row["id_documento"].'&id='.$row["id_alumno"].'" class="btn btn-danger btn-sm">Eliminar</a></td>
							   </tr>  
                               ';  
                          }  
                          ?>  
							</tbody>
						  </table>
								</div>
								
							</div>
					    	<div class="col">
								<div class="form-group col-md-12">
									
								</div>
					    	</div>
							<!--<div class="col">
							<div class="container" border>
							  
							  
							</div>
							</div>-->
					    	<!--<div class="col">
					    		<div class="form-group col-md-12">
									<label>Foto Alumno</label>
    								<input type="file" class="form-control-file mb-3" id="foto" name="foto" onchange="return validasiFile()" autocomplete="off" >
									<div id="imagePreview"><img class="foto-preview" src="foto/default_user.png"/></div>
									<div class="invalid-feedback">Foto Pegawai tidak boleh kosong.</div>
								</div>
					    	</div>-->
					  	</div>

					  	<div class="my-md-4 pt-md-1 border-top"> </div>

						<div class="form-group col-md-5">
			               <a href="prestatarios.php" class="btn btn-danger btn-submit">Volver</a>
						</div>
					
			  	</div>
			</div>
        </div>
	</div>
</body>
<script src = "js/jquery-3.1.1.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#id_deparatamento').on('change', function(){
				if($('#id_deparatamento').val() == ""){
					$('#municipio').empty();
					$('<option value = "">Selecciona un municipio</option>').appendTo('#municipio');
					$('#municipio').attr('disabled', 'disabled');
				}else{
					$('#municipio').removeAttr('disabled', 'disabled');
					$('#municipio').load('municipio_get.php?id_deparatamento=' + $('#id_deparatamento').val());
				}
		});
	});
</script>
</html>