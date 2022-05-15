<?php

include('conexaoDataBase.php');

$message = '';

$id = $_GET['id'];


if($db->exec("DELETE FROM fornecedor WHERE id = $id")){
    $message = '<div class="d-flex justify-content-between"><div class="alert alert-success" role="alert">Registro deletado com sucesso!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}else{
    $message = '<div class="d-flex justify-content-between"><div class="alert alert-danger" role="alert">Erro ao deletar registro!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}

header("location: ../fornecedores/listaFornecedor.php?msg= $message");
?>