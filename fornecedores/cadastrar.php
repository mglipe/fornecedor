<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <?php
        include('../header.php');
    ?>
    <main>
            <form class="row g-3 w-50 text-center mx-auto mt-5" action="../dataBase/insert.php" method="POST">
                <div class="col-md-6">
                    <label for="inputProduto" class="form-label">Produto:</label>
                    <input type="text" class="form-control" name="inputProduto" required>
                </div>
                <div class="col-md-6">
                    <label for="inputFornecedor" class="form-label">Fornecedor:</label>
                    <input type="text" class="form-control" name="inputFornecedor" required>
                </div>
                <div class="col-12">
                    <label for="inputUnidade" class="form-label">Custo utilitário com o produto:</label>
                    <input type="number" class="form-control" name="inputUnidade" required>
                </div>
                <div class="col-12">
                    <label for="inputTotal" class="form-label">Custo total com o produto:</label>
                    <input type="number" class="form-control" name="inputTotal" required>
                </div>
                <div class="col-md-6">
                    <label for="inputMarkUp" class="form-label">Mark-up:</label>
                    <input type="text" class="form-control" name="inputMarkUp" placeholder="%" required>
                </div>
                <div class="col-md-4">
                    <label for="inputUnameadeMarkUp" class="form-label">preço utilitario com mark-up:</label>
                    <input type="number" class="form-control" name="inputUnidadeMarkUp" required>
                </div>
                <div class="col-md-2">
                    <label for="inputQuantidade" class="form-label">Quantidade:</label>
                    <input type="number" class="form-control" name="inputQuantidade" required>
                </div>
                <div class="col-12 d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
    </main>



</body>
</html>