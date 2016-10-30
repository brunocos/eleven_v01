<!DOCTYPE html>
<html>
	<?php		
		require_once('..\conexao.php');
	?>
	<head>
		<meta charset="UTF-8">
		<title>Eleven</title>
		<link href="../imports/css/bootstrap.min.css" rel="stylesheet">
		<script src="../imports/js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="../imports/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>	
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="../index.php">Home</a></li>
					<li class="dropdown active">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="Borderos.php">Borderos</a></li>
							<li><a href="Despesas.php">Despesas</a></li>
							<li><a href="Empresas.php">Empresas</a></li>
							<li><a href="Titulos.php">Titulos</a></li>							
						</ul> <!-- dropdown-menu -->
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Listar
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="../Lista/Borderos.php">Borderos</a></li>
							<li><a href="../Lista/Despesas.php">Despesas</a></li>
							<li><a href="../Lista/Empresas.php">Empresas</a></li>
							<li><a href="../Lista/Titulos.php">Titulos</a></li>							
						</ul> <!-- dropdown-menu -->
					</li>
				</ul> <!-- nav navbar -->
			</div> <!-- container-fluid -->
		</nav>
		<div class="container-fluid">
			<div class="container-fluid">
			<form method="post" name="form">
				<div class="input-group input-group-lg" style="margin-top:1%;">
					<span class="input-group-addon" id="sizing-addon1">Empresas</span>
					<input type="text" class="form-control" name="RazaoSocial"  id="ipt_RazaoSocial" required>
				</div>
				<div>
					<div class="input-group input-group-lg" style="margin-top:1%;">
						<span class="input-group-addon" id="sizing-addon1">Especie</span>
						<input type="text" class="form-control" name="Especie"  id="ipt_Cnpj" required>
					</div>
					<div class="input-group input-group-lg" style="margin-top:1%;">
						<span class="input-group-addon" id="sizing-addon1">Vencimento</span>
						<input type="text" class="form-control" name="Vencimento"  id="ipt_Vencimento" required>
					</div>
				</div>
				<div>
					<div class="input-group input-group-lg" style="margin-top:1%;">
						<span class="input-group-addon" id="sizing-addon1">Nº do Titulo</span>
						<input type="text" class="form-control" name="Especie"  id="ipt_Cnpj" required>
					</div>
					<div class="input-group input-group-lg" style="margin-top:1%;">
						<span class="input-group-addon" id="sizing-addon1">Valor</span>
						<input type="text" class="form-control" name="Vencimento"  id="ipt_Vencimento" required>
					</div>
				</div>
				<div class="input-group input-group-lg" style="margin-top:1%;">
					<button type="submit" class="btn btn-lg btn-success">Confirmar</button>
				</div>
			</form>
		</div>
	</body>
</html>