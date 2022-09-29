<?php
    require('conect.php');

        

    $sql_all="SELECT id, nome FROM `tb_tp_redacao`";
    $sql_all="SELECT id, nome FROM `tb_tp_redacao`";

    
    $result=mysqli_query($conecta,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";
            if($_SESSION['perfil'] == 'admin'){
                echo "<td> <a href=deleta_usuario.php?id=".$consulta_count['id']."><i class='fas fa-trash fa-fw'></i></a>";

            }
            echo "<td>".$consulta_count['nome']."</td>";
            echo "</tr>";
        }
            
        require('disconect.php');    

?>