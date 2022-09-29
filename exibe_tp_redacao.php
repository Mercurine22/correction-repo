<?php
    require('conect.php');

        
    $sql_all="SELECT * FROM `tb_tp_redacao`";
    
    $result=mysqli_query($conecta,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<td>".$consulta_count['id']."</td>";
            echo "<td>".$consulta_count['nome']."</td>";
        }
        require('disconect.php');    

?>