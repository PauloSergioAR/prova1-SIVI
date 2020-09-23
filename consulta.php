<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Controle de Chamado</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="estilo-consulta.css">
</head>

<body background-color="gray" align=center class="root">
  <div width=80% class="lista" align=center>
    <?php 
        include('header.php')
      ?>
    <table>
      <tr class="titulo">
        <td>ID</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Atividade</td>
        <td>Data de Registro</td>
        <td>Data de Atendimento</td>
        <td>Status</td>
        <td></td>
        <td></td>
      </tr>
      <?php
            include("conexao.php");
            $query = mysqli_query($conexao, "SELECT * FROM atendimentos");

            while ($result = mysqli_fetch_array($query)) {


            ?>

      <tr>
        <div>
          <form action="submit-atendimento.php" method="POST">
            <?= "<input type='hidden' name='id' value='" . $result['id'] . "'>"; ?>

            <td><?= $result["id"]; ?></td>
            <td><?= $result["nome"]; ?></td>
            <td><?= $result["telefone"]; ?></td>
            <td><?= $result["atividade"]; ?></td>
            <td>
              <?php if ($result["registro"] != '') echo (new DateTime($result["registro"]))->format('d/m/Y H:i:s'); ?>
            </td>
            <td>
              <?php if ($result["atendimento"] != '') echo (new DateTime($result["atendimento"]))->format('d/m/Y H:i:s'); ?>
            </td>
            <td><?= $result["status"]; ?></td>
            <td>
              <?php
              if ($result["status"] == "espera") {
                  echo " <button type='submit' name='btn' value='atender' class='botao'>Atender</button>";
              }
            ?>
            </td>
            <td>
              <?php
              if ($result["status"] == "espera") {
                  echo "<button type='submit' name='btn' value='cancelar' class='botao'>Cancelar</button>";
              }
            ?>
            </td>

          </form>
        </div>
      </tr>
      <?php } ?>
    </table>
  </div>
</body>

</html>