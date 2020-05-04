<?php
$servername = "localhost";
$database = "servicio_social";
$username = "root";
$password = "";

$idalumno=$_POST['idalumno'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "UPDATE alumno SET 
 nombre='".$_POST['nombre']."',
 cz=".$_POST['cz'].",
 curp='".$_POST['curp']."',
 matricula='".$_POST['matricula']."',
 sexo=".$_POST['sexo'].",
 escuela=".$_POST['escuela'].",
 carrera='".$_POST['carrera']."',
 prestacion=".$_POST['prestacion'].",
 tipo_serv=".$_POST['tipo_servicio'].",
 periodoi='".$_POST['periodoi']."',
 periodof='".$_POST['periodof']."',
 dias_hr_act=".$_POST['dias_hr_act'].",
 actividad='".$_POST['actividad']."' WHERE id_alumno=$idalumno";
if (mysqli_query($conn, $sql)) {
      echo "Prestatario modificado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
print '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=editar_prestatario_cz.php?id='.$idalumno.'">';
?>
 