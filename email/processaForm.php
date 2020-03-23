<?php

$para="joaom4936@gmail.com";
$assunto="contato pelo site";
$nome= $_REQUEST["nome"];
$telefone= $_REQUEST["telefone"];
$email= $_REQUEST["email"];
$msg= $_REQUEST["assunto"];

$corpo= "<strong>Mensagem de contato</strong>  <br/> <br/>";
$corpo.=" <br/><strong>NOME:</strong> $nome";
$corpo .= " <br/><strong>TELEFONE:</strong> $telefone";
$corpo .= "  <br/><strong>EMAIL:</strong> $email";
$corpo .= "  <br/><strong>MENSAGEM:</strong> $msg";
$hearder = "Coutent-Type: text/html; charset=utf-8\n";
$hearder="From: $email Reply-to: $email\n";


@mail($para,$assunto,$corpo,$hearder);
header("Location:index.php?msg=enviado");



?>