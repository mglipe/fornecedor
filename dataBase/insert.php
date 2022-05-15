<?php

    include('conexaoDataBase.php');

    $produto = $_POST['inputProduto'];
    $fornecedor = $_POST['inputFornecedor'];
    $valorUnitario = $_POST['inputUnidade'];
    $valorTotal = $_POST['inputTotal'];
    $markUp = $_POST['inputMarkUp'];
    $valorMarkUp = $_POST['inputUnidadeMarkUp'];
    $quantidade = $_POST['inputQuantidade'];

    $messageAlert = '';

    if($db->exec("INSERT INTO fornecedor(produto, fornecedor, valorUnidadeProduto, quantidade, custoTotalProduto, markUp, precoUnitarioMarkUp) VALUES('$produto', '$fornecedor', $valorUnitario, $quantidade, $valorTotal, $markUp, $valorMarkUp)")){
        $messageAlert = "<div class='d-flex justify-content-between'><div class='alert alert-success' role='alert'>registro inserido com sucesso<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    }else{
        $messageAlert = "<div class='d-flex justify-content-between'><div class='alert alert-danger' role='alert'>erro ao inserir registro!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    }

    header("location: ../fornecedores/listaFornecedor.php?msg=$messageAlert");
?>