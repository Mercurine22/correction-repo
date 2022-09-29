<?php
    //Requisição de outro componente/arquivo
    require('conect.php');    

        //Query (pergunta - Select) para o Banco de Dados
        $sql_count="SELECT COUNT(*) as proftotal from tb_professores";        
        //
        //$variável = Resultados;
        //echo $sql_count;
        $result_count=mysqli_query($conecta,$sql_count);
        while($consulta_count=mysqli_fetch_array($result_count))
        {
            $_SESSION['qtd_prof'] = $consulta_count['proftotal'];
            

        }
        require('disconect.php');

?>