<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    //Buscar os dados enviados pelo usuário - Login.html
    $email = $_GET['email'];
    $senha = $_GET['senha'];

        //Iniciar a sessão
        session_start();

        //Query (pergunta - Select) para o Banco de Dados
        $sql="select * FROM tb_usuarios where email='$email' and senha='$senha' ";
        //$variável = Resultados;
        $result=mysqli_query($conecta,$sql);
        while($consulta=mysqli_fetch_array($result))
        {
            print 'Nome:$consulta[email]-RG:$consulta[rg]<br>';
            $_SESSION['email'] = $consulta['email'];
            $_SESSION['nome'] = $consulta['nome'];
            $_SESSION['perfil'] = $consulta['perfil'];
            header('Location: index.php');
        }
        require('disconect.php');

?>