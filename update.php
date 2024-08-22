<?php 
    include("conexao.php");

    $nome = $_GET['nome'];
    $preco = $_GET['preço'];
    
    $insert = "UPDATE INTO `produto` (`id_produto`, `nome`, `preco`) SET (NULL, '$nome', '$preco') WHERE id=". $_GET["id"];

    $resultado = $conn->query($insert);

    if ($resultado == TRUE){
        echo "Editado com sucesso!";
    }else{
        echo "Erro ao editar!";
    };

?>

