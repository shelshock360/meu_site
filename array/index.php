<?php

// x entre conchetes o valor da posição do array
//$x[0]="oi";
//$x[1]="ola";

//$y=$x;


// outra maneira de se trabalhar com array

$zoo= array ('girafa','touro', 'tartaruga','gaviao', 'leao','gaviaion');


echo"$zoo[4] <br/>";


// array com valores explicitos 

$nomes = array(0=>'joao',1=>'maria',2=>'jose');

echo"$nomes[2]"."<br/>";

$x[0][0]="valor1";
$x[0][1] = "valor2";

echo $x[0][0]."<br/>";

$cor=array(0=>array(0=>'azul',1=>"verde"));

echo  $cor[0][1]."<br/>";


/*
$config=array(); //declarando a variavel 
$config["nome"]="Pontocom";
$config["email"]="contato@gmail.com";
$config["site"]="http://www.meusite.com";
*/
//echo $config ["nome"]."-".$config["site"];

$ex=array(
"nome"=>"pontocom", 
"email"=>"contato@gmail.com",
"ativo"=>true,
"numero"=>200
 );

//print_r($ex);
//echo"<br/>".var_dump($ex);


/*for ($i=0; $i <=2; $i++) { 
   echo $nomes[$i]."<br/>";
}

*/

// cout mede o tamanho do array
/*for ($i=0; $i<count($nomes); $i++) { 
   echo $nomes[$i]."<br/>";
}
*/

$fim=10;
$i=0;
$array=array();

while($fim>$i){
    $array[]= "contador:".$i;

    $i++;



}

print_r($array);

?>