<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
    <title>Document</title>
</head>
<body>
    <?php
        include('../header.php');

        $messageAlert = '';

        if(isset($_GET['msg'])){
            $messageAlert = $_GET['msg'];
        }
    ?>

    <div>
        <?php echo $messageAlert?>
    </div>
    <form class="w-50 mx-auto" action="../dataBase/insertUser.php" method="POST">
        <div class="mb-3 mt-5">
            <label for="username" class="form-label">Username: </label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password: </label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-outline-secondary w-100">Cadastrar</button>
    </form>


    <?php
        include('../footer.php');
    ?>
</body>
</html>