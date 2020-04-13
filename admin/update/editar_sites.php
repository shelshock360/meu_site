<?php

include("../funcao/atualizar.php");

$nome=$_REQUEST['nome'];
$link=$_REQUEST['link'];
$id=$_REQUEST['id'];

echo $nome;
echo $link;
echo $id;

atualizar(array("nome","link"),array($nome,$link),"sites_relacionados","Where id='$id'");

header("location:../sites_relacionados.php?info=ok");
?>