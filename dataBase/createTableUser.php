<?php
    include('conexaoUserDataBase.php');

    if($db->exec("CREATE TABLE user (id INTEGER PRIMARY KEY, nome VARCHAR NOT NULL, senha VARCHAR NOT NULL)")){
        echo "table created successfully";
    }

?>