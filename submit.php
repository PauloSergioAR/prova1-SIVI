<?php
  require_once('conexao.php');

  $nome = @$_POST["nome"];
  $telefone = @$_POST["telefone"];
  $atividade = @$_POST["atividade"];
  $registro = date('yy/m/d h:m:s');
  $status = 'espera';

  $sql = "INSERT INTO atendimentos(ID, NOME, TELEFONE, ATIVIDADE, REGISTRO, STATUS) 
            VALUES (null,'$nome', '$telefone', '$atividade', '$registro', '$status') ";

  $query = mysqli_query($conexao, $sql);

  if($query) {
    phpAlert("Salvo com sucesso");
    header("Location: formulario-cadastro.php");
  }

  else {
    phpAlert("Erro ao salvar");
    "erro $sql";
  }


  function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }
?>