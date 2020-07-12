<?php
date_default_timezone_set('America/Sao_Paulo');

$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$sobrenome = (isset($_POST['sobrenome'])) ? $_POST['sobrenome'] : '';
$email = (isset($_POST['email'])) ? $_POST['email']: '';
$mensagem = (isset($_POST['mensagem'])) ? $_POST['mensagem']: '';
$mensagemErro = '';
$arquivo = "mensagens.txt";


//Cria uma variavel para retornar a página
$link = '../servicos/faleConosco.php';

	
	$contadorLinha = 0;
	if (file_exists($arquivo)) {
		$file = fopen($arquivo, 'a+');
		while(!feof($file)) {
			$temp = fgets($file, 1024);
			$contadorLinha++;
		}
		fclose($file);
		$contadorLinha--;
	}
		$file = fopen($arquivo, 'a+');
		if ($contadorLinha == 0){
			fwrite($file, "CODIGO | NOME | SOBRENOME | EMAIL | MENSAGEM | DATA_MSG" . PHP_EOL);
			$contadorLinha++;
		}
		$codigo = str_pad($contadorLinha, 2, '0', STR_PAD_LEFT);
		$data = date('d/m/Y H:i:s');
		$linha = "$codigo | $nome | $sobrenome | $email | $mensagem | $data" . PHP_EOL;		
		fwrite($file, $linha);		
		fclose($file);
		echo "<script>alert('Mensagem enviada!');</script>";
        echo "<script>document.location.href='$link'</script>";
?>