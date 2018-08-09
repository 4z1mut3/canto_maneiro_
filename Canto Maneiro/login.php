<?php 
  $login = $_POST['logar'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha_log']);
  $connect = mysqli_connect('localhost','root','','mydb');
    if (isset($entrar)) {
             
      $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index2.php");
        }
    }
    $login_cookie = $_COOKIE['nome'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }
?>