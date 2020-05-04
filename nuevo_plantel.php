<?php
 
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

	    <title>Servicio Social | Nuevo Plantel</title>
		 <style>
		  sinborde {
			border: 0;
		  }  
		 </style>
  	</head>
  	<body><div class="row">
        <div class="col-md-12">
			<div class="alert alert-info" role="alert">
  				<i class="fas fa-edit"></i> FICHA DE REGISTRO DE PLANTELES EDUCATIVOS DE NIVEL MEDIO SUPERIOR Y SUPERIOR.  
			</div>

			<div class="card">
			  	<div class="card-body">
			    	<!--<form class="needs-validation" action="validacion_actualizar.php" method="post" enctype="multipart/form-data" novalidate>-->
			    	<form id="form_mod_esc" name="form_mod_esc" method="post" action="guardar_plantel.php" onSubmit="return validadatosmod(this)">
<table width="100%" border="0" cellspacing="2">
  <tr>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td bgcolor="#ACE3C4"><div class="letra"><p align="center"><b>Datos Generales del Plantel Educativo</b></p></div></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="5">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td width="15%"><div align="right"><b>Nombre de la Instituci&oacute;n:</b></div></td>
        <td width="46%"><div class="caja_texto"><input type="text" class="form-control" class="form-control" name="esc" id="mesc" value="" size="80"  /></div></td>
        <td width="2%"></td>
        <td width="11%"><div align="right"><b>Nivel Educativo:</b></div></td>
        <td width="9%"><select class="form-control"  name="nivel">
						<option class="form-control" value="0">Medio</option>
						<option class="form-control" value="1">Sueperior</option>
						</select></td><td width="2%"><label></label></td>
        <td width="7%"></td>        <td width="8%"></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td width="16%"><div align="right"><b>Nombre del Director/Rector:</b></div></td>
    <td width="84%"><div class="caja_texto"><input type="text" class="form-control" name="director"  id="mdir" value="" size="77"  /></div></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td width="8%"><div align="right"><b>Domicilio:</b></div></td>
    <td width="15%"><div class="caja_texto"><input type="text" class="form-control" name="calle"  id="mcalle" value="" size="50"/></div></td>
    <td width="10%"><div class="caja_texto"><input type="text" class="form-control" name="num"  id="mnum" value="" size="10"  /></div></td>
    <td width="20%"><div class="caja_texto"><input type="text" class="form-control" name="col"  id="mcol" value="" size="30"  /></div></td>
    <td width="20%"><div class="caja_texto"><input type="text" class="form-control" name="loc"  id="mloc" value="" size="30"  /></div></td>
    <td width="20%"><div class="caja_texto"><input type="text" class="form-control" name="mun"  id="mmun" value="" size="30"  /></div></td>
    <td width="7%"><div class="caja_texto"><input type="text" class="form-control" name="cp"  id="mcp" value="0" size="10" /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center">Calle</div></td>
    <td><div align="center">N&uacute;mero</div></td>
    <td><div align="center">Colonia</div></td>
    <td><div align="center">Localidad</div></td>
    <td><div align="center">Municipio</div></td>
    <td><div align="center">C.P.</div></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td width="9%"><div align="right"><b>Tel&eacute;fono(s):</b></div></td>
    <td width="12%"><div class="caja_texto"><input type="text" class="form-control" name="tel_esc"  id="tel" value="" size="20" /></div></td>
    <td width="4%"><div align="right"><b>Ext.:</b></div></td>
    <td width="8%"><div class="caja_texto"><input type="text" class="form-control" name="ext_esc"  id="ext" value="" size="10" /></div></td>
    <td width="18%"><div align="right"><b>Correo Electr&oacute;nico:</b></div></td>
    <td width="24%"><div class="caja_texto"><input type="text" class="form-control" name="email_esc"  id="email" value="" size="40" /></div></td>
    <td width="6%"><div align="right"><b>Celular:</b></div></td>
    <td width="19%"><div class="caja_texto"><input type="text" class="form-control" name="cel_esc"  id="cel" value="" size="20" /></div></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td bgcolor="#ACE3C4"><div class="letra"><p align="center"><b>Programa de Servicio Social</b></p></div></td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td width="21%"><div align="right"><b>Persona Responsable del Programa:</b></div></td>
    <td width="44%"><div class="caja_texto"><input type="text" class="form-control" name="resp"  id="resp" value="" size="70"  /></div></td>
    <td width="5%"><div align="right"><b>Cargo:</b></div></td>
    <td width="30%"><div class="caja_texto"><input type="text" class="form-control" name="cargo"  id="mcargo" value="" size="50"  /></div></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td width="9%"><div align="right"><b>Tel&eacute;fono(s):</b></div></td>
    <td width="12%"><div class="caja_texto"><input type="text" class="form-control" name="tel_resp"  id="mtel2" value="" size="20" /></div></td>
    <td width="4%"><div align="right"><b>Ext.:</b></div></td>
    <td width="8%"><div class="caja_texto"><input type="text" class="form-control" name="ext_resp"  id="mext2" value="" size="10" /></div></td>
    <td width="18%"><div align="right"><b>Correo Electr&oacute;nico:</b></div></td>
    <td width="24%"><div class="caja_texto"><input type="text" class="form-control" name="email_resp"  id="memail2" value="" size="40" /></div></td>
    <td width="6%"><div align="right"><b>Celular:</b></div></td>
    <td width="19%"><div class="caja_texto"><input type="text" class="form-control" name="cel_resp"  id="mcel2" value="" size="20" /></div></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td width="6%"><div align="right"><b>Periodo de Inscripciones:</b></div></td>
    <td width="19%"><div class="caja_texto"><input type="text" class="form-control" name="cel_resp"  id="periodo" value="" size="20" />
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td>
</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td>
</td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    
  </tr>
</table></td>
  </tr>
  <tr>
  <table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="left"><b>Eventos o actividades donde se puede dar promoción a los servicios del IHEA:</b></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div class="caja_texto" align="center" ><textarea class="form-control" name="evento" cols="40" rows="5" id="com" tabindex="30" /></textarea></div></td>
  </tr>
</table>
    <td>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="left"><b>Comentarios y/o Sugerencias":</b></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div class="caja_texto" align="center" ><textarea class="form-control" name="com" cols="40" rows="5" id="com" tabindex="30" /></textarea></div></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">
	<div class="btn-group">
	<input type="submit" class="btn btn-info btn-sm" name="guardap" value="Guardar">
	<a href="plantel.php" class="btn btn-danger btn-sm">Volver</a>
	</div>
	</td>
  </tr>
</table>
</form>
                </td>
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