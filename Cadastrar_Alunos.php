<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/global.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script src="js.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Cadastrar</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left" method="POST" action="Cadastrar.php">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Nome de Usuário</label>
						<input type="text" class="form-control" name="nome" placeholder="Nome do Aluno">
					</div>
					<div class="form-group">
						<label for="reg_username" class="sr-only">CPF</label>
						<input type="text" class="form-control" name="cpf" placeholder="CPF">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Senha</label>
						<input type="password" class="form-control" name="senha" placeholder="Senha">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Confirmar Senha</label>
						<input type="password" class="form-control" name="confirmarsenha" placeholder="Confirmar Senha">
					</div>
					<div class="form-group">
						<label for="reg_email" class="sr-only">E-mail</label>
						<input type="text" class="form-control" name="email" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="reg_fullname" class="sr-only">Matrícula</label>
						<input type="text" class="form-control" name="matricula" placeholder="Matrícula">
					</div>
					
					
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p><a href="Login_Usuario.php">Já tem uma conta?</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>