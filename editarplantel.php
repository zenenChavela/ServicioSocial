<?php
$servername = "localhost";
$database = "servicio_social";
$username = "root";
$password = "";

$idplantel=$_POST['id_plantel'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "UPDATE plantel SET esc='".$_POST['esc']."',
director='".$_POST['director']."',
calle='".$_POST['calle']."',
num='".$_POST['num']."',
col='".$_POST['col']."',
loc='".$_POST['loc']."',
mun='".$_POST['mun']."',
cp=".$_POST['cp'].",
tel_esc='".$_POST['tel_esc']."',
ext_esc='".$_POST['ext_esc']."',
email_esc='".$_POST['email_esc']."',
cel_esc='".$_POST['cel_esc']."',
resp='".$_POST['resp']."',
cargo='".$_POST['cargo']."',
tel_resp='".$_POST['tel_resp']."',
ext_resp='".$_POST['ext_resp']."',
email_resp='".$_POST['email_resp']."',
cel_resp='".$_POST['cel_resp']."',
com='".$_POST['com']."',
nivel='".$_POST['nivel']."',
eventos='".$_POST['evento']."',
periodo='".$_POST['periodo']."' 
WHERE id_plantel=$idplantel";
if (mysqli_query($conn, $sql)) {
      echo "Prestatario modificado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
print '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=editar_plantel.php?id='.$idplantel.'">';
?>
 