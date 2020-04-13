<?php
include"../funcao/inserir.php";
include"../../extensoes/url_amigavel.php";
$nome=$_REQUEST["nome"];
$url=url_amigavel($nome);
$_UP['pasta']='../../img/img_cliente/';
$_UP['tamanho']=1024*1024*2;
$_UP['extensoes']=array('jpg','png','gif');
$_UP['renomeia']=true;

$extensao = strtolower (end(explode('.',$_FILES['img']['name'])));

if(array_search($extensao,$_UP['extensoes'])=== false){
    header("location:../inserir_cliente.php?info=erro-extensao");
    exit;
} else if ($_UP['tamanho'] < $_FILES['img']['size']){
    header("location:../inserir_cliente.php?info=erro-tamanho");
    exit;
   } else if($_UP['renomeia'] == true){
    $nome_final = time().'.jpg';
   } else {
    $nome_final = $_FILES['img']['name'];
   }
   if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta'].$nome_final)){
   } else {
    header("location:../inserir_cliente.php?info=erro-img");
    exit; 
   }
inserir(array("nome","url","imagem"),array($nome,$url,$nome_final), "clientes");
header("location:../inserir_cliente.php?info=ok");
?>


