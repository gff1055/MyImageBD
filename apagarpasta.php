<?php
$pasta = "arquivos3/";

if(is_dir($pasta)){	// verifica se o caminho colocado é um diretorio
	$diretorio = dir($pasta);	// variavel diretorio recebe a instancia 'diretorio' associada ao caminho colocado
	while($arquivo = $diretorio->read()){	// lendo cada um dos arquvos do diretorio
		if(($arquivo != '.') && ($arquivo != '..')){
			unlink($pasta.$arquivo);	// apagando o arquivo da pasta
			echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';	// exibindo confimacao
		}
	}
	$diretorio->close();	// fechando o diretorio
}
else{
	echo 'A pasta não existe.';
}
?>

<?php
$pasta = 'arquivos3';	// caminho dapasta

if(rmdir($pasta)){	// removendo a pasta
	echo 'Pasta deletada com sucesso.';	// mensagem exibida caso a pasta tenha sido excluida
}

else{
	echo 'A pasta não pode ser deletada.';
}
?>
