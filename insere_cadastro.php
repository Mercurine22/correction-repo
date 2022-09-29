<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    
    //Verifica qual o time de Insert
    if ($tipo_insert == "usuarios"){
        //Buscar os dados enviados pelo usuário -    Login.html
        $nome = $_GET['nome'];
        $rg = $_GET['rg'];
        $cpf = $_GET['cpf']; 
        $cep = $_GET['cep'];
        $senha = $_GET['senha'];
        $email = $_GET['email'];
        $perfil = $_GET['perfil'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_usuarios 
            (nome, rg, cpf, cep, senha, email, perfil)
            values ('$nome','$rg','$cpf','$cep','$senha','$email','$perfil')";
    }    
    echo $sql_insert;
    mysqli_query($conecta,$sql_insert);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    switch ($tipo_insert) {
        case "usuarios" : header("Location: exibe_usuario.php");
        break;
   }  
?>