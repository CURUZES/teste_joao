<?php


$servidor = "127.0.0.1";
$dbname = "projeto";  
$usuario = "root";
$senha = "";

$con = mysqli_connect($servidor, $usuario, $senha, $dbname) or die('Bamco não conectou') ;
mysqli_select_db($con,"usuario");

mysqli_close($con);

# Verificando se a conexão foi realizada
/*if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/
?>

