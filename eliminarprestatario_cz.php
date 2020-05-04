<?php
$servername = "localhost";
$database = "servicio_social";
$username = "root";
$password = "";

$idalumno=$_GET['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "DELETE FROM alumno WHERE id_alumno=$idalumno";
if (mysqli_query($conn, $sql)) {
      echo "Prestatario Eliminado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
print '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=prest_cz.php">';
?>
 