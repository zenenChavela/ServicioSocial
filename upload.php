<?php
$idalumno=$_POST['idalumno'];
$connect = mysqli_connect("localhost", "root", "", "servicio_social");  
 
$archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : null;
if ($archivo) {
   $ruta_destino_archivo = "archivos/{$archivo['name']}";
   $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
}
echo $idalumno;
echo '<br>';
echo $_POST['archivonombre'];
echo '<br>';
echo $ruta_destino_archivo;
echo '<br>';
$sql = "INSERT INTO documentacion (id_alumno, docmento, ruta) VALUES
 ($idalumno,'".$_POST['archivonombre']."','".$ruta_destino_archivo."')";
 
 if (mysqli_query($connect, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
print '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=documentacion.php?id='.$idalumno.'">';

?>