<?php

include("conexao.php");

$select = "SELECT * FROM produto";

$resultado = $conn->query($select);


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>

<body>
    <a href="index.php">
        < voltar</a>
            <br>
            <br>
            <table border="1">
                <thead>
                    <th>id </th> <th>Nome </th> <th>Preço</th> <th>Ação</th>
                </thead>
                <tbody>
                    <?php
                    while ($produto = $resultado->fetch_object()) {
                        echo "<tr>";
                            echo "<td>".$produto->id_produto ."</td>";
                            echo "<td>".$produto->nome ."</td>";
                            echo "<td>".$produto->preco. "</td>";
                        echo "</tr>";

                        echo "<td>";
                            echo "<a href='delete.php?id=$produto->id_produto'>Excluir</a>";
                        echo "</td>";
                    }


                    ?>
                </tbody>

            </table>
</body>

</html>