<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
     
 
        //Buscar os dados enviados pelo usuário -    Login.html
        $email = $_GET['email'];
        $nome = $_GET['nome'];
        $senha = $_GET['senha'];
        $graduacao = $_GET['graduation'];
        $correct = $_GET['correction'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_professores
            (email, nome, senha, graduacao, dt_validade, id_tp_redacao)
            values ('$email','$nome','$senha','$graduacao',now()+365,'$correct')";
    echo $sql_insert;
   mysqli_query($conecta,$sql_insert);
   header("Location: exibe_professor.php");
   require('disconect.php');
    
?>