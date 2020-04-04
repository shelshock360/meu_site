<?php
$banco ="projeto";
$hostname="localhost";
$usuario="mysql";
$senha="Palmeiras123";



$conexao=mysqli_connect($hostname,$usuario,$senha,$banco ); mysqli_select_db($conexao,$banco) or die ('Não foi possivel conectar com o banco');

mysqli_close($conexao);

?>