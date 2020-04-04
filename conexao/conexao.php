<?php

function conectar($banco="projeto",$usuario="mysql",$senha="Palmeiras123",$hostname="localhost"){

    $conectar=mysqli_connect($hostname,$usuario,$senha);

    if(!$conectar){

        die(trigger_error("não foi possivel estabelecer uma conexao com o banco de dados "));
        return false;
    }else{

        $db=mysqli_select_db($conectar,$banco);

        if(!$db){
            die(trigger_error("não foi possivel selecionar o banco de dados"));
            return false;
        }else{
            return$conectar;
        }
    }

}
?>