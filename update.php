<?php 
    include("conexao.php");
    
    $id = $_GET ["id"];
    $nome = $_GET['nome'];
    $preco = $_GET['preço'];
    
    $update = "UPDATE produto SET nome = '$nome', preco = '$preco' WHERE id_produto= $id";

    $result = $conn->query($update);

    if ($result === true){
        echo "Editado com sucesso!";
    }else{
        echo "Erro ao editar!";
    };

?>

<a href="read.php">
    < voltar</a>