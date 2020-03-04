<?php
  include 'config.php';
  session_start();

  $_SESSION['nome-alun'] = $_POST['nome_alun'];
  $_SESSION['matricula'] = $_POST['matricula'];


  $nome = $_POST["nome_alun"] ?? false;
  $tipo = $_POST["tipo"] ?? false;
  $registro = $_POST["registro"] ?? false;
  $senha = md5($_POST["senha_alun"]) ?? false ;
  $confirmarSenha = $_POST["confirmar_senha"] ?? false;
  $cpf = $_POST["cpf_alun"] ?? false;
  $email = $_POST["email_alun"] ?? false;

  if($senha !== $confirmar_senha){
	redirect('Cadastrar_Usuario.php?msg=As senhas não estão iguais');
	exit();
  }

$PDO = dbConnect();

$sql = "INSERT INTO Usuarios(nome, tipo, registro, senha, cpf, email) VALUES(:NOME, :TIPO, :REGISTRO, :SENHA, :CPF, :EMAIL)";

$stmt = $PDO->prepare($sql);
$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':CPF', $cpf);
$stmt->bindParam(':TIPO', $tipo)
$stmt->bindValue(":NOME",$nome);
$stmt->bindValue(":REGISTRO",$registro);
$stmt->bindValue(":SENHA",$senha);
$stmt->bindValue(":EMAIL",$email);

$stmt->execute();

header('location:Cadastrar_Usuario.php?msg=Aluno cadastrado com sucesso');

?>