<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="custom.js" defer></script>
</head>
<body>
    <?php

        include('../header.php');
        $db = new SQLite3('../dataBase/dataBaseFornecedor.db');

        $alerta = '';

        if(isset($_GET['msg'])){
            $alerta = $_GET['msg'];
        }

        
        $resultFornecedor = $db->query('SELECT * FROM fornecedor');
    ?>

    <div>
       <?php 
        echo $alerta;
       
                    
        ?>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid"></div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../login.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listaFornecedor.php">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Sair</a>
                </li>
            </ul>
    </nav>
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">#</th>
                <th scope="col">Produto</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Custo utilitário<br> com o produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Custo total<br> com  produto</th>
                <th scope="col">mark up</th>
                <th scope="col">preço utilitário<br> com mark up</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php  

            while ($rowFornecedor = $resultFornecedor->fetchArray()){
            ?>
        
            <tr>
                <td>

                </td>
                <td><?php echo $rowFornecedor['id']?></td>
                <td><?php echo $rowFornecedor['produto']?></td>
                <td><?php echo $rowFornecedor['fornecedor']?></td>
                <td><?php echo "R$", $rowFornecedor['valorUnidadeProduto']?></td>
                <td><?php echo $rowFornecedor['quantidade']?></td>
                <td><?php echo "R$", $rowFornecedor['custoTotalProduto']?></td>
                <td><?php echo $rowFornecedor['markUp'], "%"?></td>
                <td><?php echo "R$", $rowFornecedor['precoUnitarioMarkUp']?></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="editar(<?= $rowFornecedor?>)">
                        <a href="editarListafornecedor.php" class="text-light text-decoration-none" id="button-editar">Editar</a>                    
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="deletar(<?= $rowFornecedor['id']?>)">
                        Delete
                    </button>
                </td>
                
            </tr>
    <?php } ?>
    </tbody>
    </table>

    <?php
        include('modal.php');
    ?>
    
</body>
</html>