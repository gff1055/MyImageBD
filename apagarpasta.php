<?php
$pasta = "arquivos3/";

if(is_dir($pasta)){
	$diretorio = dir($pasta);
	while($arquivo = $diretorio->read()){
		if(($arquivo != '.') && ($arquivo != '..')){
			unlink($pasta.$arquivo);
			echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';
		}
	}

	$diretorio->close();
}
else{
	echo 'A pasta não existe.';
}
?>

<?php
$pasta = 'arquivos3';

if(rmdir($pasta)){
	echo 'Pasta deletada com sucesso.';
}

else{
	echo 'A pasta não pode ser deletada.';
}
?>
