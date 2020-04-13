<?php

include("../funcao/inserir.php");
include("../../extensoes/url_amigavel.php");

$titulo=utf8_decode($_REQUEST["titulo"]);
$url= url_amigavel($titulo);
$resumo= $_REQUEST["resumo"];
$conteudo= $_REQUEST["conteudo"];
$data=$_REQUEST["data"];


$_UP['pasta'] = '../../img/img_portifolio/';
 
 $_UP['tamanho'] = 1024*1024*2; //2mb
 
 $_UP['extensoes'] = array('jpg','png','gif');
 
 $_UP['renomeia'] = true;
 
 $extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
 
 if(array_search($extensao, $_UP['extensoes']) === false){
  header("location:../inserir_portifolio.php?info=erro-extensao");
  exit;
 } else if ($_UP['tamanho'] < $_FILES['img']['size']){
  header("location:../inserir_portifolio.php?info=erro-tamanho");
  exit;
 } else if($_UP['renomeia'] == true){
  $nome_final = time().'.jpg';
 } else {
  $nome_final = $_FILES['img']['name'];
 }
 
 if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'].$nome_final)){
   
 } else {
  header("location:../inserir_portifolio.php?info=erro-img");
  exit; 
 }

inserir(array("titulo","url","resumo","conteudo","data","img_destaque"),array($titulo,$url,$resumo,$conteudo,$data,$nome_final), "portifolio");

header("location:../inserir_portifolio.php?info=ok");

?>