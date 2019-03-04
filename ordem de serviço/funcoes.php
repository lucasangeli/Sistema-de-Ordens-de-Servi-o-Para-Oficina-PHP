<?php
$servername = "localhost";
$username = "localhost";
$password = "";
$dbname = "test";

$cnx = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT id, nome FROM funcionario";
$result = mysqli_query($cnx, $sql);

if(isset($_POST['grv'])){
  $sql = "INSERT INTO registros (nome_func, placa, descricao, valor_servico) VALUES ('".$_POST["funcionario"]."','".$_POST["placaVeiculo"]."','".$_POST["descProb"]."','".$_POST["valor"]."')";

  $result = mysqli_query($cnx,$sql);
}

function mostraRegistros(){
    $servername = "localhost";
    $username = "localhost";
    $password = "";
    $dbname = "test";
   
    $cnx = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM registros";
    $result = mysqli_query($cnx, $sql);

    echo "<table border=1px  cellpadding=0 cellspacing=0>
          <col align='left'</col>
          <tr>
          <th>Veículo</th>
          <th>Funcionario Responsável</th>
          <th>Descrição do defeito</th>
          <th>Valor</th>
				  </tr>";
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr><td> " . $row["placa"] . $row["nome_func"] . $row["descricao"] .  $row["valor_servico"] . "</td></tr>";
          } 
        }
    echo "</table>";
}

if(isset($_POST['historico'])){
    mostraRegistros();
}

?>