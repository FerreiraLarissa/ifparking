<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="global.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script src="js.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<div class="text-center" style="padding:50px 0">
	<div class="logo">Cadastrar-se</div>

	<div class="login-form-1">
		<form id="register-form" class="text-left" method="POST">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<legend>Nome Completo do Funcionário</legend>
						<label for="reg_username" class="sr-only">Nome Completo do Funcionário</label>
						<input type="text" class="form-control" name="nome" placeholder="Ex:João da Silva">
					</div>
					<br>
					<div class="form-group">
						<legend>CPF</legend>
						<label for="reg_cpf" class="sr-only">CPF</label>
						<input type="text" class="form-control" name="cpf" placeholder="Ex:111.111.111-11">
					</div>
					<br>
					<div class="form-group">
						<legend>SIAPE</legend>
						<label for="reg_siape" class="sr-only">SIAPE</label>
						<input type="text" class="form-control" name="siape" placeholder="Ex:1234567">
					</div>
					<br>
					<div class="form-group">
						<legend>Setor</legend>
						<label for="reg_setor" class="sr-only">Setor</label>
						<input type="text" class="form-control" name="setor" placeholder="Ex:Administrativo">
					</div>
					<br>
					<div class="form-group">
						<legend>Cargo</legend>
						<label for="reg_cargo" class="sr-only">Cargo</label>
						<input type="text" class="form-control" name="cargo" placeholder="Ex:Diretor Geral">
					</div>
					<br>
					<div class="form-group">
						<legend>Telefone</legend>
						<label for="reg_telefone" class="sr-only">Telefone</label>
						<input type="text" class="form-control" name="telefone" placeholder="Ex:(81)0000-0000">
					</div>
					<br>
					<div class="form-group">
						<legend>E-mail</legend>
						<label for="reg_email" class="sr-only">E-mail</label>
						<input type="text" class="form-control" name="email" placeholder="Ex:Joao@gmail.com">
					</div>
					<br>
					<div class="form-group">
						<legend>Senha</legend>
						<label for="reg_password" class="sr-only">Senha</label>
						<input type="password" class="form-control" name="senha" placeholder="Senha">
					</div>
					<br>
					<div class="form-group">
						<legend>Confirmar senha</legend>
						<label for="reg_password_confirm" class="sr-only">Confirmar Senha</label>
						<input type="password" class="form-control" name="confirmarsenha" placeholder="Confirmar Senha">
					</div>
					
			    </div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p><a href="add_func.php">Finalizar cadastro</a></p>
				<p><a href="Login_Func.php">Já tem uma conta?</a></p>
			</div>
		</form>
	</div>
</div>