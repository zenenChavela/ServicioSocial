<?php
  session_start();
 $cz=$_SESSION['cz'];
  $mysqli = new mysqli('localhost', 'root', '', 'servicio_social');

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

	    <title>Servicio Social | Nuevo Prestatario</title>
		 <style>
		  sinborde {
			border: 0;
		  }  
		 </style>
  	</head>
  	<body><div class="row">
        <div class="col-md-12">
			<div class="alert alert-info" role="alert">
  				<i class="fas fa-edit"></i> Registro de Prestatario.  
			</div>

			<div class="card">
			  	<div class="card-body">
			    	<!--<form class="needs-validation" action="validacion_actualizar.php" method="post" enctype="multipart/form-data" novalidate>-->
			    	<form class="needs-validation" action="guardar_prestatarios_cz.php" method="post" enctype="multipart/form-data" novalidate>
					  	<div class="row">
						
					    	<div class="col">
							<pre><h3>Datos Generales</h3></pre>
					      		<div class="form-group col-md-12">
									<label>Nombre</label>
									<input type="text" class="form-control" name="nombre" maxlength="100" autocomplete="off" value="" placeholder="Apellido Paterno Apellido Materno Nombre(s)">
									
								</div>

								<div class="form-group col-md-12">
									<label>CURP</label>
									<input type="text" class="form-control" name="curp" autocomplete="off" value="" >
									
								</div>
								
								<div class="form-group col-md-12">
									<label>Matrícula</label>
									<input type="text" class="form-control" name="matricula" autocomplete="off" value="" placeholder="Matrícula o Número de Cóntrol">
								</div>

								<div class="form-group col-md-12">
									<label class="mb-3">Sexo</label>
									<div class="custom-control custom-radio">
									    <input type="radio" class="custom-control-input" id="customControlValidation2" name="sexo" value="0" >
									    <label class="custom-control-label" for="customControlValidation2">Masculino</label>
									</div>
									<div class="custom-control custom-radio mb-4">
									    <input type="radio" class="custom-control-input" id="customControlValidation3" name="sexo" value="1">
									    <label class="custom-control-label" for="customControlValidation3">Femenino</label>
									    
									</div>
								</div>
								
								<div class="form-group col-md-12">
									<label>Plantel Educativo</label>
								<select class="form-control" name="escuela">
								<?php $query = $mysqli -> query ("SELECT * FROM plantel");
								while ($valores = mysqli_fetch_array($query)) {
                                echo '<option  class="form-control" value="'.$valores['id_plantel'].'">'.$valores['esc'].'</option>';
									}
									?>
									</select>
								</div>
								
								<div class="form-group col-md-12">
									<label>Carrera</label>
									<input type="text" class="form-control" name="carrera" autocomplete="off" value="" placeholder="Carrera o Especialidad">
								</div>
								
								<div class="form-group col-md-12">
									<label>Coordinación de Zona</label>
									<select class="form-control" name="cz">
								<option  class="form-control" value="<?=$cz=$_SESSION['cz']?>"><?=$cz=$_SESSION['cz']?></option>
								<option  class="form-control" value="1">1</option>
								<option  class="form-control" value="1">2</option>
								<option  class="form-control" value="1">3</option>
								<option  class="form-control" value="1">4</option>
								<option  class="form-control" value="1">5</option>
								<option  class="form-control" value="1">6</option>
								<option  class="form-control" value="1">7</option>
								<option  class="form-control" value="1">8</option>
								<option  class="form-control" value="1">9</option>
								<option  class="form-control" value="1">10</option>
								<option  class="form-control" value="1">11</option>
								<option  class="form-control" value="1">12</option>
								<option  class="form-control" value="1">13</option>
								<option  class="form-control" value="1">14</option>
								<option  class="form-control" value="1">15</option>
								<option  class="form-control" value="1">16</option>
								<option  class="form-control" value="1">17</option>
								
								</select>
									
								</div>
					      																	
					    	</div>
								<br><br>
					    	<div class="col">
								<div class="form-group col-md-12">
									<label>Tipo de prestación</label>
									<select class="form-control" name="prestacion">
								<option  class="form-control" value="1">Servicio Social</option>
								<option  class="form-control" value="2">Practicas Profesionales</option>
								</select>
									
								</div>

								<div class="form-group col-md-12">
									<label>Fígura</label>
									<select class="form-control" name="tipo_servicio">
								<?php $query = $mysqli -> query ("SELECT * FROM tipo_servicio");
								while ($valoresFig = mysqli_fetch_array($query)) {
                                echo '<option  class="form-control" value="'.$valoresFig['id_tiposerv'].'">'.$valoresFig['tipo_servicio'].'</option>';
									}
									?>
									</select>
									
								</div>

								<div class="form-group col-md-12">
									<label><Kbd>Inicio de periodo de prestación</Kbd></label>
									<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="periodoi" value="" autocomplete="off" >
								</div>
								
								
								
								<div class="form-group col-md-12">
									<label><Kbd>Fin de periodo de prestación</Kbd></label>
									<input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="periodof" value="" autocomplete="off" >
									
								</div>
								
								
								<div class="form-group col-md-12">
									<label>Días y Horario de Actividades:</label>
									<select class="form-control" name="dias_hr_act">
								<?php $query = $mysqli -> query ("SELECT * FROM dias_hr_activ");
								while ($valoresdias = mysqli_fetch_array($query)) {
                                echo '<option  class="form-control" value="'.$valoresdias['id_diashractiv'].'">'.$valoresdias['nombre'].'</option>';
									}
									?>
									</select>
								</div>
								
								<div class="form-group col-md-12">
									<label><Kbd>Actividades a realizar</Kbd></label>
									<textarea class="form-control"  rows="10" name="actividad"></textarea>
								</div>
								
								<div class="form-group col-md-12">
							     <input type='hidden' class='form-control' name='idalumno'  value="" style="" >
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
			                <div class="btn-group">
							<input type="submit" class="btn btn-info btn-submit" name="simpan" value="Guardar">
			                <a href="prestatarios.php" class="btn btn-danger btn-submit">Volver</a>
							</div>
				  		</div>
					</form>
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