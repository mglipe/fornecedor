<?php
include('conexaoDataBase.php');

if($db->exec("CREATE TABLE fornecedor (id INTEGER PRIMARY KEY, produto VARCHAR NOT NULL, fornecedor TEXT NOT NULL, valorUnidadeProduto FLOAT NOT NULL, quantidade INT NOT NULL, custoTotalProduto FLOAT NOT NULL, markUp FLOAT NOT NULL, precoUnitarioMarkUp FLOAT NOT NULL)")){
    echo "created table success";
}

?>