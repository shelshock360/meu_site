<?php
 function somar(){
$x=10;
$y=5;
$result=$x  + $y;

echo"$result<br/>";
}
for ($i=0; $i <5 ; $i++) { 
  somar();
    
}


$x = 20;
/*function soma($x, $y)
{

    $result = $x + $y;

    echo "$result";

    return $result;
}

soma(10, 4);

*/
function media(){
    $nota1 = 90;
    $nota2 = 40;
    $nota3 = 50;
    $nota4 = 70;

    $media=($nota1+$nota2+$nota3+$nota4)/4;

    echo"a media é $media <br/>";


}


media();


$alunos[0]["nomes"]="alice";
$alunos[0]["media"]=media();





?>