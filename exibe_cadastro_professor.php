<?php
    require('conect.php');

        

    $sql_all="SELECT id, nome, email, senha, graduacao, dt_validade, id_tp_redacao FROM `tb_professores`";

    $sql_all="SELECT professores.id, 
                        professores.nome, 
                        professores.email, 
                        professores.senha, 
                        professores.graduacao, 
                        professores.dt_validade, 
                        tp_redacao.nome as id_tp_redacao
                    FROM `tb_professores` as professores
                    INNER JOIN tb_tp_redacao as tp_redacao ON professores.id_tp_redacao = tp_redacao.id";

    
    $result=mysqli_query($conecta,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";
            if($_SESSION['perfil'] == 'admin'){
                echo "<td> <a href=deleta_professor.php?id=".$consulta_count['id']."><i class='fas fa-trash fa-fw'></i></a>";
                echo "<a href=editar_professor.php?id=".$consulta_count['id']."><i class='fas fa-edit fa-fw'></i></a></td>";
            }
            echo "<td>".$consulta_count['id']."</td>";
            echo "<td>".$consulta_count['nome']."</td>";
            echo "<td>".$consulta_count['email']."</td>";
            echo "<td>".$consulta_count['senha']."</td>";
            echo "<td>".$consulta_count['graduacao']."</td>";
            echo "<td>".$consulta_count['dt_validade']."</td>";
            echo "<td>".$consulta_count['id_tp_redacao']."</td>";
            echo "</tr>";
        }
        require('disconect.php');    

?>