<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    
    //Verifica qual o time de Insert
    if ($tipo_insert == "usuarios"){
        //Buscar os dados enviados pelo usuário -    Login.html
        $nome = $_GET['nome'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_tp_redacao 
            (nome)
            values ('$nome')";
    }    
    echo $sql_insert;
    mysqli_query($conecta,$sql_insert);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    switch ($tipo_insert) {
        case "usuarios" : header("Location: exibe_cadastro_status.php");
        break;
   }  
?>