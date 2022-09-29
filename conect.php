<?php
    //mysql ou mysqli -> funções utilizadas pelo
    //MYSQL 
    //mysqli_connect -> Conecta no MYSQL
    $conecta=mysqli_connect('127.0.0.1','root','') 
    or print (mysqli_error());
	mysqli_select_db($conecta,'bd_tcc_2022') 
    or print(mysqli_error());
	
?>
 