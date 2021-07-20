
<?php
//Conexão com banco de dados
$servidor = "127.0.0.1";
$dbname = "projeto";
$usuario = "root";
$senha = "";

$con = mysqli_connect($servidor, $usuario, $senha, $dbname) or die('Banco não conectou') ;
mysqli_select_db($con,"usuario");



$nome = $_POST['nome'];
  
$nome_ = $_POST['nome_'];
$sobrenome_ = $_POST['sobrenome_'];
$cpf_ = $_POST['cpf_'];
$nasc_ = $_POST['nasc_'];



$query = mysqli_query($con,"UPDATE pessoa SET nome = '$nome_', sobrenome = '$sobrenome_', cpf = '$cpf_', data = '$nasc_'   WHERE nome = '$nome'");

$query = "SELECT *FROM pessoa";
  
$result = mysqli_query($con,$query);

if($query){
    echo"<script language='javascript' type='text/javascript'>
    alert('Usuário alterado com sucesso!');'</script>;'";
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível alterar os dados');</script>;";
  }





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


?>