<?php
    //Requisição de outro componente/arquivo
    require('conect.php');


    $edita_insert = $_GET['edita_insert'];
   
    //Verifica qual o time de Insert
    if ($edita_insert == "professores"){
   
    //Verifica qual o time de Insert

        //Buscar os dados enviados pelo usuário -   Login.html
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $senha = $_GET['senha'];
        $graduacao = $_GET['graduacao'];
        $tiporedacao = $_GET['correction'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_alterar="UPDATE tb_professores SET 
            nome = '$nome',
            email = '$email', 
            senha = '$senha', 
            graduacao = '$graduacao', 
            id_tp_redacao = '$tiporedacao'
            WHERE id = $id";

    }    
    echo $sql_alterar;
    mysqli_query($conecta,$sql_alterar);
    //Verifica qual é o insert para redirecionar
    header("Location: exibe_professor.php")  
?>