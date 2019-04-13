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



















	
	<?php 

session_start();

if ((!isset($_SESSION["logar"])) || (!isset ($_SESSION["senha_log"]))) {
	echo "<center><b><font color='red'><h3> não pode cadastrar imovel <a href='login.html'>faça o login</a></h3> </font></b></center>";
	exit;
}
?>
<?php

echo "<center><b><font color='green'><h3> pode cadastrar imovel sem problemas</h3> </font></b></center>";

?>

  

<div class="form" style="color: black">
   <form class="container-fluid" id="formCadastro" data-toggle="validator" role="form" method="POST" action="armaze-imovel.php">	 
   <div style="width: 800px;">
	   <h4 style="color: red"><U>INFORMAÇÕES DO IMÓVEL</U></h4><br> 
	   <label for="textNome" class="control-label">Tipo de imóvel</label><br>
	   <input style="width: 50%;border-color:black;" type="text" name="tipo" placeholder="ex:kitNet,Apartamento"><br>   
		<label for="textNome" class="control-label">Endereço</label>	
	   <input style="width: 50%;border-color: black;"id="nome" name="nome" class="form-control" placeholder="Informe endereço" type="text" required size="50">	 
	   <label> bairro </label><br>
	   <input style="width: 50%;border-color: black;" type="text" name="bairro" placeholder="digite o bairro"> <br> 	  	    
		<label for="textNome" class="control-label">CEP</label>	
	   <input style="width: 50%;border-color: black; id="nome" name="cep" class="form-control" placeholder="Informe CEP" type="text" required size="10">
	   <label for="inputEmail" class="control-label" >Quantidade de comodos</label>	    
	   <input style="width: 50%;border-color: black; id="email" name="como" class="form-control" placeholder="Informe a quantidade de comodos do imóvel" type="text" required size="3">	        	  
	  <label for="inputPassword" class="control-label">area</label>	 
	  <input style="width: 50%;border-color: black; id="senha" name="area" type="text" class="form-control" id="inputPassword" placeholder="Em metros" required size="20">
	  <label class="control-label">valor do imóvel</label><BR>
	  <input style="width: 50%;border-color: black;" type="text" name="valor" placeholder="valor em R$">
   </div>
   <div style="float: left;margin-top: -300px;margin-left: 500px;">	
   <!-- aqui para anexar uma foto !-->
   <h4 style="text-align: center;"><u>anexar foto do imóvel</u></h4>
   <input type="file" name="myfile" accept="image/png, image/jpeg"  multiple>  <br>	
   <input type="file" name="myfile2" accept="image/png, image/jpeg" multiple=""><br>  
   <button  type="submit" class="btn btn-primary">Salvar cadastro</button>
   </div>	
   </form>

</div>

