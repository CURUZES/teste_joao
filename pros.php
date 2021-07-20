<?php

//Conexão com banco de dados
$servidor = "127.0.0.1";
$dbname = "projeto";
$usuario = "root";
$senha = "";

$con = mysqli_connect($servidor, $usuario, $senha, $dbname) or die('Bamco não conectou') ;
mysqli_select_db($con,"usuario");


$esc = $_POST['esc'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$nasc = $_POST['nasc'];
// $escolhas


if($esc == 1){
$query_select = "SELECT *FROM pessoa";

$select = mysqli_query($con,$query_select);


        $query = "INSERT INTO `pessoa` VALUES ('0', '$nome', '$sobrenome', '$cpf', '$nasc')";
        $insert = mysqli_query($con,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location
          .href='index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='index.php'</script>";
        }

        mysqli_close();
      }
if($esc == 2){
  echo"<script language='javascript' type='text/javascript'>
  alert('Você está sendo enviado para a pagina de alterações');window.location
  .href='alter.php'</script>";
}

if ($esc == 3) {
     $query = "SELECT *FROM pessoa WHERE nome LIKE '%$nome%'";
  
  $result = mysqli_query($con,$query);
    echo "<table border='1'><tr><th>nome</th><th>sobrenome</th><th>cpf</th><th>data de nascimento</th></tr>";
  
  while($row  = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['nome'] . "</td>";
  echo "<td>" . $row['sobrenome'] . "</td>";
  echo "<td>" . $row['cpf'] . "</td>";
  echo "<td>" . $row['data'] . "</td>";
  
  echo "</tr>";
  }
}

if ($esc == 4) {
  $delete = "DELETE FROM `pessoa` WHERE nome = '$nome'";

$result = mysqli_query($con,$delete);

if($delete){
  echo"<script language='javascript' type='text/javascript'>
  alert('Usuário excluído com sucesso!');window.location
  .href='index.php'</script>";
}else{
  echo"<script language='javascript' type='text/javascript'>
  alert('Não foi possível excluir esse usuário');window.location
  .href='index.php'</script>";
}

mysqli_close($con);
}

/*
if ($esc ==5){
    $query = "SELECT *FROM pessoa";
  
  $result = mysqli_query($con,$query);
    echo "<table border='1'><tr><th>nome</th><th>sobrenome</th><th>cpf</th><th>data de nascimento</th></tr>";
  
  while($row  = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['nome'] . "</td>";
  echo "<td>" . $row['sobrenome'] . "</td>";
  echo "<td>" . $row['cpf'] . "</td>";
  echo "<td>" . $row['data'] . "</td>";
  
  echo "</tr>";
  }
  echo "</table>";
  
  mysqli_close($con);
  }
*/

?>