<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="create.php" method="get">
        <input type="hidden" name="id">
        <label class="form-label" for="">Nome do Produto</label>
        <input class="form-control" type="text" name="nome"><br>

        <label class="form-label" for="nota">Preço</label>
        <input class="form-control" type="text" name="preço"><br>

        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>