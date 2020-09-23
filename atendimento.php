<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Controle de Chamado</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" type="text/css" href="header-style.css">
</head>

<body background-color="gray" align=center class="root">
  <div class="container">
    <?php 
      include('header.php')
    ?>
    <form method="post" action="submit.php" align=left>
      <input type="hidden" name="id" value="<?php echo $id; ?>">

      <div class="field">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Nome*" required>
      </div>

      <div class="field">
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="Telefone*" required>
      </div>

      <div class="field">
        <label for="atividades">Atividade:</label>
        <select name="atividade" id="atividade" required>
          <option value="segunda via de conta">Segunda via de conta</option>
          <option value="mudança de endereço">Mudança de endereço</option>
          <option value="suspensão de serviço">Suspensão de serviço</option>
          <option value="negociação de débitos">Negociação de débitos</option>
        </select>
      </div>
      <input type="submit" name="submit" value="Enviar">
    </form>
  </div>
</body>

</html>