<?php 
    include("conexao.php");

    $nome = $_GET['nome'];
    $preco = $_GET['preço'];
    
    $insert = "INSERT INTO `produto` (`id_produto`, `nome`, `preco`) VALUES (NULL, '$nome', '$preco')";

    $resultado = $conn->query($insert);

    if ($resultado == TRUE){
        echo "Cadastrado com sucesso!";
    }else{
        echo "Erro ao cadastrar!";
    }








?>