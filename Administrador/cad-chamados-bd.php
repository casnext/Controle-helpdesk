<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
<title>Suporte</title>
</head>
<body>

<?php
	include ("../conexao.php");
	include_once ("menu.html");
	include ("../verificaAcesso.php");

	$tipo = $_POST['tipo'];
	$dtAbertura = $_POST['dtAbertura'];
	$dtAtender = $_POST['dtAtender'];
	$dtConcluir = $_POST['dtConcluir'];
	$NomeRequerente = $_POST['NomeRequerente'];
	$setor = $_POST['setor'];
	$tpReparo = $_POST['tpReparo'];
	$numInventario = $_POST['numInventario'];
	$status = $_POST['status'];
	$prioridade = $_POST['prioridade'];
	$atribuicao = $_POST['atribuicao'];
	$descricao = $_POST['descricao'];
	
	$sql = mysqli_query($conexao,"INSERT INTO  chamados 
		(tipo, dtAbertura, dtAtender, dtConcluir, NomeRequerente,  setor, tpReparo, numInventario, status, prioridade, atribuicao,
		descricao) VALUES 
		('$tipo', '$dtAbertura', '$dtAtender', '$dtConcluir', '$NomeRequerente', '$setor', '$tpReparo', '$numInventario', 
		'$status', '$prioridade','$atribuicao', '$descricao')");
	var_dump ("$sql");
	echo "
	
	<form>
	<div class='grupo' align='center'>
	<img src='../imagens/sucesso.png' alt='some text' width=80 height=80 align='center'><br><br>
	</div>
	<div>
	<font color=#333><center><h1>Cadastro realizado com sucesso !</h1></center>
	</div>
	</form>
	";
	mysqli_close($conexao);
	
?>
 	<center><a href="form-cad-chamados.php">Clique aqui para novo cadastro</a></center>
</body>
</html>
