<?php include "header.php"?>
<?php include "funcoes.php" ?>

<style>
  h1{
	text-align: center;
}
</style>


<form id="formulario" method="POST">
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputEmail4">Data</label>
      <input type="date" class="form-control" id="inputData" placeholder="Data de início">
    </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Hora</label>
      <input type="time" class="form-control" id="inputTime" placeholder="Hora">
    </div>
  </div>
  <div class="form-group">
    <label>Funcionário responsável</label><br>
    <select class="form-control" name="funcionario">
        <option></option>
        <?php
          $query = "SELECT id, nome FROM funcionario";
          $send_query = mysqli_query($cnx, $query);

          while($row = mysqli_fetch_array($send_query)){
            echo "<option > {$row['id']} {$row['nome']}  </option>";
          }
        ?>
    </select>
  </div>
  <div class="form-row">
  <div class="form-group col-sm-1">
    <label>Placa do veículo</label>
    <input type="text" class="form-control" name="placaVeiculo" placeholder="Placa do Veículo">
  </div>
  <div class="form-group">
      <label>Descrição do problema</label>
      <textarea rows="4" cols="50" class="form-control" placeholder="Descrição do problema relatado pelo cliente" name="descProb"></textarea>
  </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputState">Peças que foram trocadas</label>
      <textarea rows="2" cols="25" class="form-control" id="vlrPecas" placeholder="Descrição do problema relatado pelo cliente"></textarea>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Valor total do serviço</label>
      <input type="number" class="form-control" name="valor">
    </div>
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-success" name="grv">Gravar</button>
  <button class="btn btn-danger" id="formReset">Limpar</button>
  <button class="btn btn-warning" name="historico">Historico</button>
</form>

<?php require "footer.php" ?>