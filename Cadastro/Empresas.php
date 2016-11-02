<!DOCTYPE html>
<html>
	<?php		
		//require_once('..\conexao.php');
		
	?>
	<body>	
		<div class="container">
			<?php require_once("..\dev_nav.php");?>
			<form method="post" name="form">
				<div class="input-group input-group-lg" style="margin-top:1%;">
					<span class="input-group-addon" id="sizing-addon1">Razão Social</span>
					<input type="text" class="form-control" name="RazaoSocial"  id="ipt_RazaoSocial" required>
				</div>
				<div class="input-group input-group-lg" style="margin-top:1%;">
					<span class="input-group-addon" id="sizing-addon1">C.N.P.J</span>
					<input type="text" class="form-control" name="CNPJ"  id="ipt_Cnpj" required>
				</div>
				<div class="input-group input-group-lg" style="margin-top:1%;">
					<button type="submit" class="btn btn-lg btn-success">Confirmar</button>
				</div>
			</form>
		</div>
	</body>	
</html>