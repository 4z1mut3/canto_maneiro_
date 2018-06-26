<?php
	include_once("connection.php");
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone= $_POST["telefone"];
	$cpf= $_POST["CPF"];
	$senha= $_POST["senha"];
	$sql = "INSERT INTO `cadastro`(nome,email,telefone,cpf,senha) VALUES ('$nome','$email','$telefone','$cpf','$senha')";
	$resul = mysqli_query($conn,$sql);
	if(!$resul){
		echo("erro!!!");
	}else{
		echo("cadastro com sucesso");
	}


?>