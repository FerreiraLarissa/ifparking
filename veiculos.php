<link rel="stylesheet" href="assets/css/global.css">
<center>
	<h1>Veiculos Cadastrados</h1>
</center>
<table style=" border: 5px solid black;">
		<tr>
			<th>VEICULO</th>
			<th>PLACA</th>
			<th>MODELO</th>
			<th>FABRICANTE</th>
			<th>COR</th>
			<th>Excuir</th>
 		 </tr>
<?php 
	require_once('../Controller/conexaoBanco.php'); 

		$sql2= "SELECT * FROM veiculos";
		$queryOne = $conn ->prepare($sql2);
		$queryOne -> execute();
		$veiculos = $queryOne-> fetchALL();
					   
		 foreach ($veiculos as $veiculo):
		 if ($veiculo[0] == $reserva[1]):
					?>
			  <tr>
				 <td>
				     <?=$veiculo['tipo'];?>
				  </td>
				</tr>
<?php 
	 		endif;
			endforeach;
					?>
</table>