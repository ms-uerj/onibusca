<?php

//Defina o t�tulo do site
    $titulo="Cadastrando Usuario Onibusca";
    
//Dados do mySql

	$host = "mysql.diariodecodigos.info";
	$user = "diariodecodigo03"; 			# usu�rio do mySql
	$passwd = "onibusca";					# senha do mySql
	$schema = "diariodecodigo03";			# nome do banco de dados
    
//Conex�o
    @mysql_connect($host, $user, $pass);
    mysql_select_db($bd);
?>