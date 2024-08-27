<?php
    
    include "conexao.php";

    $id = $_GET ["id"];
    
    $select = "SELECT id_produto, nome, preco FROM produto WHERE id_produto = $id";

    $result = $conn->query($select);

    $produto = $result->fetch_object()


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="read.php">voltar</a>
    <br>
    <br>
    <form action="update.php" method="get">
        <input type="hidden" value="<?= $produto->id_produto ?>" name="id">
        <label class="form-label" for="">Nome do Produto</label>
        <input class="form-control" type="text" value="<?= $produto->nome ?>" name="nome"><br>

        <label class="form-label" for="nota">Preço</label>
        <input class="form-control" type="text" value="<?= $produto->preco ?>" name="preço"><br>

        <input type="submit" value="Atualizar">

    </form>
</body>

</html>