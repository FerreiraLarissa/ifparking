<?php 
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
	header("location:index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 
<center>
	<h1>Registro veiculos</h1>
	
	<form method="post" action="../controller/veiculosController.php">
		<label > veiculo</label>
		<select name="veiculo">
		  <option value="1">carro</option> 
		  <option value="2" >moto</option>
		  <option value="3">bike</option>
		</select><br>
		<label > placa</label>
		<input type="text" name="placa">
		<br>
		<label > modelo</label>
		<input type="text" name="modelo">
		<br>
		<label > fabricante</label>
		<input type="text" name="fabricante">
		<br>
		<label > cor</label>
		<input type="text" name="cor">
		<br>
		<input type="submit" value="enviar">
		<br>
	</form>
</center>
<!-- <a href="veiculos.php">Voltar</a> -->
	
</body>
</html>