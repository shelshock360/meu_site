<?php
include ("../../conexao/conexao.php");
include ("../../conexao/fecha_conexao.php");

function atualizar($coluna,$valor,$tabela,$where){

    // arrays?

    if((is_array($coluna)) and (is_array($valor))){

        // verificando se tem o mesmo numero de elementos

        if(count($coluna) == count($valor)){

            $valor_coluna = NULL;
            // montar sql 

            // colocar array em uma string
            for($i=0; $i<count($coluna);$i++){

                $valor_coluna .="{$coluna[$i]} ='{$valor[$i]}',";
            }

            // tirando a virgula da ultima posição 

            $valor_coluna=substr($valor_coluna,0,-1);
            // montar sql
        $atualizar ="UPDATE {$tabela} SET {$valor_coluna} {$where}" ;
        }else{

            return false;
        }
    }else{
        // se não for um array ira montar a sql 
    $atualizar="UPDATE {$tabela} SET {$coluna} ='{$valor}' {$where}";
    }

 
    // verificando se conectou
    if($conexao= conectar()){
        if(mysqli_query($conexao, $atualizar)){
  
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