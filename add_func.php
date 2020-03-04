<?php
include 'config.php';
session_start();
$_SESSION['siape'] = $_POST['siape'];
$_SESSION['nome-func'] = $_POST['nome_func'];

$nome = $_POST['nome_func'] ?? false;
$cpf = $_POST['cpf_func'] ?? false;
$siape = $_POST['siape'] ?? false;

if($senha !== $conf_senha){
	redirect('cad_funcionario.php?msg=As senhas não estão iguais');
	exit();
}

$PDO = dbConnect();

$sql = "INSERT INTO Funcionario(nome,cpf,siape) values(:nome, :cpf, :siape)";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':siape', $siape);


$stmt->execute();

redirect('cad_funcionario.php');
?>