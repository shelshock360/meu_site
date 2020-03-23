<?php session_start();// iniciando a sessão

$login="pcanal";
$senha="123";
//$usuario=$_SESSION['usuario'];
//$_SESSION=$_SESSION['senha'];



if($login=="pcanal" && $senha=="123"){

  $_SESSION['logado']=true;
  header("Location:restrito.php");

}else{

    echo"não logado";
}


?>