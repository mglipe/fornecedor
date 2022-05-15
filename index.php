<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
    <title>Document</title>
</head>
<body>
    <?php
        include('header.php');

        $messageAlerta = '';

        if(isset($_GET['msg'])){
            $messageAlerta = $_GET['msg'];
        }
    ?>

    <main>
    <div>
        <?php  echo $messageAlerta ?>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-6">
            <img src="./assets/fornecedor.jpg" alt="fornecedor">
        </div>
        <div class="col-5 mt-5 px-5 ">
            <form action="user/authe.php" method="POST">
                <div class="col-auto mt-5">
                    <label class="" for="autoSizingInputGroup">Email</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <span>
                                <i class="material-icons">alternate_email</i>
                            </span>
                        </div>
                            <input type="text" name="username" class="form-control" id="autoSizingInputGroup" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <div class="input-group">
                        <div class="input-group-text">
                            <span>
                                <i class="material-icons">lock</i>
                            </span>
                        </div>
                            <input type="password" name="password" class="form-control" id="autoSizingInputGroup2" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="d-flex align-items-end">
                        <button type="submit" class="btn btn-outline-dark w-100">Login</button>
                    </div>
                    <div class="mt-3">
                        <p class="text-center fs-5">Não possui um conta?<a href="user/cadastroUser.php" class="link-primary text-decoration-none"> Clique aqui!</a></p>
                    </div>     
                </div> 
            </form>
                    
        </div>
    </div>
    </main>

    <?php
        include('footer.php');
    ?>

   
</body>
</html>