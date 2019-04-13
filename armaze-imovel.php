<?php
	include_once("connection.php");
	$tipo = $_POST["tipo"];
	$endereço = $_POST["nome"];
	$bairro = $_POST["bairro"];
	$cep = $_POST["cep"];
	$comodos = $_POST["como"];
	$area = $_POST["area"];
	$valor = $_POST["valor"];
	$sql2 = "INSERT INTO tipos_de_imoveis(tipo) VALUES ('$tipo')";
	$sql1 = "INSERT INTO imovel(endereco,area_mxm,preco,comodo,bairro,cep) VALUES ('$endereço','$area','$valor','$comodos','$bairro','$cep')";
	$resul1 = mysqli_query($conn,$sql1);
	$resul2 = mysqli_query($conn,$sql2);
	if($resul1 || $resul2){
			echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='cadastro-imovel.html'</script>";
        }else{
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro-imovel.html'</script>";
	
        }	
		

	class Imovel{
		private $tipo;
		private $endereco;
		private $bairro;
		private $cep;
		private $comodos;
		private $area;
		private $valor;


		public function getTipo() {
			return $this->tipo;
		}
		  
		public function setTipo($tipo) {
			$this->tipo = $tipo;
		}

		public function getEndereco() {
			return $this->endereco;
		}
		  
		public function setEndereco($endereco) {
			$this->endereco = $endereco;
		}

		public function getBairro() {
			return $this->bairro;
		}
		  
		public function setBairro($bairro) {
			$this->bairro = $bairro;
		}

		public function getCEP() {
			return $this->cep;
		}
		  
		public function setCEP($cep) {
			$this->cep = $cep;
		}

		public function getComodos() {
			return $this->comodos;
		}
		  
		public function setComodos($comodos) {
			$this->comodos = $comodos;
		}
		public function getArea() {
			return $this->area;
		}
		  
		public function setArea($area) {
			$this->area = $area;
		}

		public function getValor() {
			return $this->valor;
		}
		  
		public function setEndereco($valor) {
			$this->valor = $valor;
		}
	
	}


?>