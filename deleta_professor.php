<?php
    require('conect.php');
    require('cadastro_professor.php');

    $id = $_GET['id'];
        
    $sql_del="DELETE FROM `tb_professores`
              WHERE id = $id";
    
    mysqli_query($conecta,$sql_del);
    require('disconect.php');   

?>