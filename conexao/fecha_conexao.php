<?php

function fechaConexao($conectar)
{
    $fecha=mysqli_close($conectar);

    if(!$fecha){

        echo"impossivel fechar a conexao";
        return false;
    }else{

        return true;
    }
}
?>