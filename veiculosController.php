<?php
require ("../db/conexaoBanco.php");
$veiculo= $_POST["veiculo"];
$placa= $_POST["placa"];
$modelo= $_POST["modelo"];
$fabricante = $_POST["fabricante"];
$cor= $_POST["cor"];
$idUser= $_SESSION['id'];

$sql2 = "INSERT INTO Veiculos(tipo,placa,modelo,fabricante,cor,id_usuario) VALUES(:tipo,:placa,:modelo,:fabricante,:cor,:user)";
$query2 =$conn->prepare($sql2);
$query2->bindValue(":tipo",$veiculo);
$query2->bindValue(":placa",$placa);
$query2->bindValue(":modelo",$modelo);
$query2->bindValue(":fabricante",$fabricante);
$query2->bindValue(":cor",$cor);
$query2->bindValue(":user",$idUser);
$query2->execute();

header('location:CadastroDeVeiculo.php');

 ?>