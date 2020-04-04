<?php
include ("../../conexao/conexao.php");
include ("../../conexao/fecha_conexao.php");

function inserir($coluna,$valor,$tabela){

    // arrays?

    if((is_array($coluna)) and (is_array($valor))){

        // verificando se tem o mesmo numero de elementos

        if(count($coluna)== count($valor)){

            // montar sql 

        $inserir= "INSERT INTO {$tabela} (".implode(',',$coluna).")
        values ('".implode('\',\'',$valor)."')";
        }else{

            return false;
        }
    }else{
        // se não for um array ira montar a sql

    $inserir="INSERT INTO {$tabela} {($coluna)} values ('{$valor}')";
    }

    // verificando se conectou
    if($conexao= conectar()){

        if(mysqli_query($conexao,$inserir)){

            fechaConexao($conexao);
            return true;
        }else{
            echo"query invalida";
            return false;
        }

    }else{

        return false;
    }
}
?>