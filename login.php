<?php 
  $login = $_POST['logar'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha_log']);
  $connect = mysqli_connect('localhost','root','','mydb');
    if (isset($entrar)) {
             
      $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'") or die(mysqli_error());
	  $usuario = mysqli_query($connect,"SELECT id_usuarios FROM usuarios WHERE email = '$login' AND senha = '$senha'");
        if(mysqli_num_rows ($verifica) > 0 )
{
session_start();
$_SESSION['userid'] = $usuario;
$_SESSION['logar'] = $_POST["logar"];
$_SESSION['senha_log'] = $_POST["senha_log"];
echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha corretos');window.location.href='login.html';</script>";
header("location:index.php");
}
else{
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  echo"<script language='javascript' type='text/javascript'>alert('email ou senha incorretos,tente novamente');window.location.href='login.html'</script>";
  } 
}
?>
