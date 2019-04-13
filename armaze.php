
    <?php
	include_once("connection.php");
	$nome = $_POST["nome"];
  $email = $_POST["email"];
	$telefone= $_POST["telefone"];
	$cpf= $_POST["CPF"];
	$senha= md5($_POST["senha"]);

			
  $sql = "INSERT INTO usuarios(nome,cpf,telefone,senha,email) VALUES ('$nome','$cpf','$telefone','$senha','$email')";
	$resul = mysqli_query($conn,$sql);
        if($resul){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='cadastro.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }	
?>
   
    
    
    
