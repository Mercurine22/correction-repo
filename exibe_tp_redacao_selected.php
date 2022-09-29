<?php
    require('conect.php');
        
    $sql_all="SELECT * FROM `tb_tp_redacao` WHERE ID = 1";
    
    $result=mysqli_query($conecta,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo $consulta_count['nome'];
        }
        require('disconect.php');    

?>