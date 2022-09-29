<?php
    //Requisição de outro componente/arquivo
    require('conect.php');    

        //Query (pergunta - Select) para o Banco de Dados
        $sql_count="SELECT COUNT(*) as total, (SELECT COUNT(*) FROM tb_usuarios WHERE perfil = 'user') as user,(SELECT COUNT(*) FROM tb_usuarios WHERE perfil = 'admin') as admin FROM tb_usuarios";        
        //
        //$variável = Resultados;
        //echo $sql_count;
        $result_count=mysqli_query($conecta,$sql_count);
        while($consulta_count=mysqli_fetch_array($result_count))
        {
            $_SESSION['qtd_usuarios'] = $consulta_count['total'];
            $_SESSION['qtd_users'] = $consulta_count['user'];
            $_SESSION['qtd_admin'] = $consulta_count['admin'];

        }
        require('disconect.php');

?>