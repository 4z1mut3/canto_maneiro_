<!DOCTYPE html>
<html>
<head>
	<title>cadastre seu imovel</title>

<title>Cadastro</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canto Maneiro</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <style type="text/css">
    body{

    		color: white;

    	}
    	#barra_de_navegacao{
    		color: white;
    	}
    </style>
</head>
<body>


<nav class="navbar navbar-iverse" id="barra_de_navegacao">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" id="botaoNav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.html"><b>Canto Maneiro</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li> <a href="index.php">Home</a> </li>
            <li> <a href="sobre.php">Meus imóveis</a> </li>
            <li> <a href="sobre.php">Minha conta</a> </li>
            <li> <a href="sobre.php">Sobre</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cadastro.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
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
</nav>
   

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




</body>


  <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
</html>