<?php
	include_once("connection.php");
	$tipo = $_POST["tipo"];
	$endereço = $_POST["nome"]["bairro"]["cep"];
	$comodos = $_POST["como"];
	$area = $_POST["area"];
	$valor = $_POST["valor"];
	
	$sql2 = "INSERT INTO tipos_de_imoveis(tipo) VALUES ('$tipo')";
	$sql = "INSERT INTO imovel(endereco,area_mxm,preco,comodo) VALUES ('$endereço','$area','$valor','$comodos')";
	$resul = mysqli_query($conn,$sql);
	$resul2 = mysqli_query($conn,$sql2);
	if($resul || $resul2){
			echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='cadastro-imovel.html'</script>";
        }else{
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro-imovel.html'</script>";
	
        }	
		




?>