<?php
$servername = "localhost";
$database = "servicio_social";
$username = "root";
$password = "";

 ECHO $_POST['nombre'];
  ECHO '<BR>';
 ECHO $_POST['curp'];
  ECHO '<BR>';
 ECHO $_POST['matricula'];
  ECHO '<BR>';
 ECHO $_POST['sexo'];
  ECHO '<BR>';
 ECHO $_POST['escuela'];
  ECHO '<BR>';
 ECHO $_POST['carrera'];
  ECHO '<BR>';
 ECHO $_POST['prestacion'];
  ECHO '<BR>';
 ECHO $_POST['tipo_servicio'];
  ECHO '<BR>';
 ECHO $_POST['periodoi'];
  ECHO '<BR>';
 ECHO $_POST['periodof'];
  ECHO '<BR>';
 ECHO $_POST['dias_hr_act'];
  ECHO '<BR>';
 ECHO $_POST['actividad'];
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO alumno (nombre, cz, curp, matricula, sexo, escuela, carrera, 
prestacion, tipo_serv, f_captura, periodoi, periodof, dias_hr_act, actividad) VALUES (
'".$_POST['nombre']."',
".$_POST['cz'].",
'".$_POST['curp']."',
'".$_POST['matricula']."',
".$_POST['sexo'].",
".$_POST['escuela'].",
'".$_POST['carrera']."',
".$_POST['prestacion'].",
".$_POST['tipo_servicio'].",
'".date("Y-m-d")."',
'".$_POST['periodoi']."',
'".$_POST['periodof']."',
".$_POST['dias_hr_act'].",
'".$_POST['actividad']."'
)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
print '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=prest_cz.php">';
?>
 