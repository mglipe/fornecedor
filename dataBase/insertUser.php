<?php
    include('conexaoUserDataBase.php');

    $messageAlert = '';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($db->exec("INSERT INTO user (nome, senha) VALUES('$username', '$password')")){
        $messageAlert = "<div class='alert alert-success' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> Usuário cadastrado com sucesso!</div>";
        header("location: ../index.php?msg= $messageAlert");

    }else{
        $messageAlert = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> Erro ao cadastrar usuário!</div>";
        header("location: ../user/cadastroUser.php?msg= $messageAlert");
    }

    
?>