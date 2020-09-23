<?php

include("conexao.php");
$ID = $_POST["id"];
$btn = $_POST["btn"];

if ($btn == "atender") {
    $now = date('Y/m/d h:m:s');
    $sql = "UPDATE atendimentos SET  STATUS = 'atendido', ATENDIMENTO = '$now'  WHERE ID = '$ID'";
    $query = mysqli_query($conexao, $sql);

    if ($query) {
        echo "<script>alert('Chamado atualizado')</script>";
        header('Location: ./consulta.php');
    } else {
        echo "<script>alert('Erro ao atualizar chamado')</script>";
        header('Location: ./consulta.php');
    }
} else if ($btn == 'cancelar') {
    $sql = "UPDATE atendimentos SET  STATUS = 'cancelado'  WHERE ID = '$ID'";
    $query = mysqli_query($conexao, $sql);

    if ($query) {
        echo "<script>alert('Chamado Atualizado')</script>";
        header('Location: ./consulta.php');
    } else {
        echo "<script>alert('Erro ao atualizar o chamado')</script>";
        header('Location: ./consulta.php');
    }
}
?>