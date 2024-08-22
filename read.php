<?php 

    include("conexao.php");

    $select = "SELECT * FROM produto";

    $resultado = $conn->query($select);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <table>
        <thead>
            <th>id </th> <th>Nome </th> <th>Preço</th>
        </thead>
        <tbody>
            <?php 
                while($produto = $resultado->fetch_object()){
                    echo "<tr>";
                        echo "<td>$produto->id_produto </td> </td>$produto->nome </td> </td>$produto->preco </td>";
                    echo "</tr>";
                }
            
           
            ?>
        </tbody>
        
    </table>
</body>
</html>