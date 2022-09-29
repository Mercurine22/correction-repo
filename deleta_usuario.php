<?php
    require('conect.php');
    require('cadastro_usuario.php');

    $id = $_GET['id'];
        
    $sql_del="DELETE FROM `tb_usuarios`
              WHERE id = $id";
    
    mysqli_query($conecta,$sql_del);
    require('disconect.php');   

?>