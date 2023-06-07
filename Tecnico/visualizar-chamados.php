<?php

require_once ("menu.html");
include("../conexao.php");
include ("../verificaAcesso.php");

?>
<?php
session_start();
$consulta = "SELECT * FROM chamados WHERE atribuicao = 1 AND prioridade = 1 ";
$con = $conexao->query($consulta);
?>
<html>
	<head>


		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A layout example that shows off a responsive pricing table.">
		

		<link rel="stylesheet" href="/css/pure/pure-min.css">
		<link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
		<title>ARV-DESK</title>	
		<link rel="stylesheet" href="../css/formstyle.css">
		<style>
		h1{
			font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
			font-weight: 100;
			text-align:center;
			color: #072c45;
		}
		.th{
			color: #072c45;
		}
		.p-3{
			widht:200px;
			height:70px;
			border-radius: 20px 20px;
			background-image: linear-gradient(to bottom right, red, #FFEFD5);

		}
		.p-2{
			widht:60px;
			height:80px;
			border-radius: 20px 20px;
			background-image: linear-gradient(to bottom right, orange, #FFDAB9);

		}
		.pure-button:hover{
			background-color:#D6D6D6;
			color: #6D6D6D;
			border-bottom:3px solid #D9B310;
		}
		.pure-table:hover{
			background-color:#e8e4e4;
		}
		.campo_submit:hover{
			background-color:#D6D6D6;
			color: #6D6D6D;
			border-bottom:3px solid #D9B310;
		}
		.div1{
			margin-left:5%;
		}
		.pure-table{
			
			width:100%;
		}
		.content{
			margin-right:5%;
			align: center;
		}
		.a{
			color: #fff;
		}
		.td{
			color: #363636;
			text-align: center;
		}
		</style>

	<script type="text/javascript">
		function Nova()
		{
			location.href="Atender.php"
		}
	</script>
	</head>
	
      
      
	<body>
	
	
	<form class="form" method="post" action="#">
	
		

		
	<fieldset class="grupo">
			<div class="div" align="center">
		<img src="../imagens/computer02.png" alt="some text" width=90 height=80><br>
		
		<?php 
		date_default_timezone_set("America/Sao_Paulo");
		echo date('l, ');
		echo date('d/m/Y H:i:s a');?>

		</font><br><br><br><br>
		</div>
			<h1>Solicitações:</h1><br>
			
			<div class="pure-button-group" role="group" aria-label="..." align="center" >
			
			<button  type="button" class="pure-button" onclick="carregar('chamados_abertos.php')">Abertos</button>
			<button  type="button" class="pure-button" onclick="carregar('chamados_andamento.php')">Em andamento</button>
			<button  type="button" class="pure-button" onclick="carregar('chamados_encerrados.php')">Encerrados</button>
			<button  type="button" class="pure-button" onclick="carregar('chamados_todos.php')">Todos</button>

			</div>
	
	
			<br><br>
			
			<div align="center">
				<h4><font color="#072c45">Explorar:</h4><br>
				<a href="form-cons-chamados.php"><img src="../imagens/search.png" alt="some text" width=20 height=20> Consultas</a> |
				<a href="pesquisarrelatorio.php"><img src="../imagens/lapis1.png" alt="some text" width=20 height=20> Relatorios</a> |
				<a href="form-cad-chamados.php"><img src="../imagens/mais.png" alt="some text" width=20 height=20> Abrir solicitação</a>
				
				
			</div>
		</fieldset>

		<div id="conteudo"></div>

		</form>

		<script type="text/javascript">
			function carregar(pagina){
       			$("#conteudo").load(pagina);
    	}
		</script>



	</body>

	<style type="text/css">
		.conteudo {
			width: 50%
			height: 50%;
		}
	</style>
	
</html>