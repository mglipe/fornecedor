<?php

$db = new SQLite3('../dataBase/dataBaseUser.db');

$messageAlert = '';


$username = $_POST['username'];
$password = $_POST['password'];


if(isset($username) && isset($password)){
    $users = $db->query("SELECT * FROM user");
    $auth = $users->fetchArray();

    if(array_search($username, $auth) && array_search($password, $auth)){
        session_start();
        $_SESSION['user'] = array($auth['nome']);
        header("location: ../login.php");
        
    }else{
        $messageAlert = "<div class='alert alert-danger' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> Usuário não cadastrado!</div>";
        header("location: ../index.php?msg= $messageAlert");
    }
}
?>
