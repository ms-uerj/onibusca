<?php
/*********************************
*   Tutorial :: Fazendo cadastros
*  
**********************************/

//Defina o t�tulo do site
    $titulo="Cadastrando Usuario Onibusca";
    
//Dados do mySql
    $serverName = "mysql.diariodecodigos.info";
    $user="diariodecodigo03"; # usu�rio do mySql
    $pass="onibusca"; # senha do mySql
    $bd="diariodecodigo03"; # nome do banco de dados
    
//Conex�o
    @mysql_connect($serverName, $user, $pass);
    mysql_select_db($bd);
?>