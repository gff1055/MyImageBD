<?php

//Fabyo Guimaraes
//se existir o arquivo
$pasta_dir = "arquivos3/fofinha.jpg";	//diretorio dos arquivos

//se nao existir a pasta ele cria uma
if(file_exists($pasta_dir)){
		unlink($pasta_dir);
	//echo exec('whoami');
	}


	//conecta no banco
//	$cn = mysql_connect("localhost");
//	mysql_select_db("banco");


	//aqui salva no banco o path da foto

	/*echo<font face="verdana">mysql_query("INSERT INTO tabela VALUES ('', '$arquivo_nome')");
mysql_close($cn); </font>
*/ 




?>