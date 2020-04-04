<?php
include"../funcao/inserir.php";

$login=$_REQUEST["login"];
$senha=$_REQUEST["senha"];

inserir(array("login","senha"),array($login,md5($senha)),"user");




?>