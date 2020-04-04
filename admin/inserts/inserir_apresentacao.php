<?php

include"../funcao/inserir.php";


$titulo1=$_REQUEST["titulo1"];
$titulo2=$_REQUEST["titulo2"];
$subtitulo=$_REQUEST["sub"];


inserir(array("titulo1","titulo2","subtitulo"), array($titulo1,$titulo2,$subtitulo), "apresentacao");
header("location:../inserir_apresentacao.php");

?>