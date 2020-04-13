<?php
include "../funcao/select.php";

$consulta = select("sites_relacionados order by id asc  ");

if($consulta == true){

    for ($i=0;$i<count($consulta); $i++) { 
      
        echo $consulta[$i]['id']."<br/>";
        echo $consulta[$i]['nome']."<br/>";
        echo $consulta[$i]['link']."<br/>";
    }

}else{

    echo"nenhum resultado na consulta"."<br/>";    
}


?>