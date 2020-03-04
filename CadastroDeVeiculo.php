<?php 
//verif se existe usuario logado 
/*if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
	header("location:index.php");

}*/
?>

<!-- <a href="veiculos.php">Voltar</a> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="global.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script src="js.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Cadastra Veiculo</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left" method="POST" action="veiculosController.php">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Veiculos</label>
						<select type="text" class="form-control" name="veiculo" placeholder="Nome de Usuário">
							<option value="1" class="form-control" >carro</option> 
		  					<option value="2"class="form-control" >moto</option>
		  					<option value="3" class="form-control">bicicleta</option>
						</select>
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Placa</label>
						<input type="text" class="form-control" name="placa" placeholder="placa">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Modelo</label>
						<input type="text" class="form-control" name="modelo" placeholder="modelo">
					</div>
					<div class="form-group">
						<label for="reg_email" class="sr-only">Fabricante</label>
						<input type="text" class="form-control" name="fabricante" placeholder="fabricante">
					</div>
					<div class="form-group">
						<label for="reg_fullname" class="sr-only">Cor</label>
						<input type="text" class="form-control" name="cor" placeholder="cor">
					</div>
					
					
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p><a href="veiculos.php">Veiculos cadastrados</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
	
</body>
</html>