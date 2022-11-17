<?php
    //Requisição de outro componente/arquivo
    require('conect.php');

        //Buscar os dados enviados pelo usuário -    Login.html
        $nome = $_GET['nome'];
        $cpf = $_GET['CPF']; 
        $email = $_GET['email'];
        $senha = $_GET['senha'];
        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_clientes 
            (nome, cpf, email, senha)
            values ('$nome','$cpf','$email','$senha')";
      
    echo $sql_insert;
    mysqli_query($conecta,$sql_insert);

?>