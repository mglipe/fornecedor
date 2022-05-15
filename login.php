<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        include('header.php');

        session_start();
       
        if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
            $nome = $_SESSION['user'][0];
        }else{
            header("location: ./index.php");
        }

    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fornecedores/listaFornecedor.php">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="user/loggout.php">Sair</a>
                </li>
            </ul>
            <div class="d-flex">
                <span class="material-icons">
                    account_circle
                </span>
                <span class="show"><?php echo $nome?></span>
            </div>
            </div>
        </div>
    </nav>
    
</body>
</html>