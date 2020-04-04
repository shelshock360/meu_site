<?php


include"../funcao/inserir.php";
include"../../extensoes/url_amigavel.php";
$nome=$_REQUEST["nome"];
$url=url_amigavel($nome);
$img=$_REQUEST["img"];


inserir(array("nome","url","imagem"),array($nome,$url,$img), "clientes");


header("location:../inserir_cliente.php?info=ok");



?>


