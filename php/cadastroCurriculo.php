<?php
date_default_timezone_set('America/Sao_Paulo');

$nome = (isset($_POST['nome']))? $_POST['nome'] : '';
$sobrenome = (isset($_POST['sobrenome']))? $_POST['sobrenome'] : '';
$nascimento = (isset($_POST['nascimento']))? $_POST['nascimento'] : '';
$endereco = (isset($_POST['endereco']))? $_POST['endereco'] : '';
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = (isset($_POST['telefone']))? $_POST['telefone'] : '';
$celular = (isset($_POST['celular']))? $_POST['celular'] : '';
$empresa = (isset($_POST['empresa']))? $_POST['empresa'] : '';
$cargo = (isset($_POST['cargo']))? $_POST['cargo'] : '';
$atividade = (isset($_POST['atividade']))? $_POST['atividade'] : '';
$universidade = (isset($_POST['universidade']))? $_POST['universidade'] : '';
$periodo = (isset($_POST['periodo']))? $_POST['periodo'] : '';
$anoLetivo = (isset($_POST['anoLetivo']))? $_POST['anoLetivo'] : '';
$link = '../servicos/carreira.php';


$countLine = 0;
if (file_exists('curriculo.txt')) :
  $file = fopen('curriculo.txt', 'r');
  while (!feof($file)) :
    $linha = fgets($file, 1024);
    $countLine++;
  endwhile;
  fclose($file);
  $countLine--;
endif;

$file = fopen('curriculo.txt', 'a+');
if($countLine == 0):
  fwrite($file, "ID | NOME | SOBRENOME | NASCIMENTO | ENDEREÇO | CIDADE | ESTADO | TELEFONE | CELULAR | EMPRESA | atividade | ATIVIDADE | UNIVERSIDADE | PERÍODO | ANO/SEMESTRE | DATA" . PHP_EOL);
  $countLine++;
endif;

$dataAtual = date('d/m/y');
$id = str_pad($countLine, 4, '0', STR_PAD_LEFT);
fwrite($file, "$id | $nome | $sobrenome | $nascimento | $endereco | $cidade | $estado | $telefone | $celular | $empresa | $cargo | $atividade | $universidade | $periodo | $anoLetivo | $dataAtual" . PHP_EOL);
fclose($file);

echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>document.location.href='$link'</script>";
