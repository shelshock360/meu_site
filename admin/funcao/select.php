<?php
include("../conexao/conexao.php");
include("../conexao/fecha_conexao.php");

function select($tabela,$coluna = "*", $where = NULL, $ordem = NULL, $limite = NULL)
{

    $sql = "SELECT {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";

    // verificando se conectou

    if ($conexao = conectar()) {

        if ($query = mysqli_query($conexao, $sql)) {
            // vericando se alguma coisa foi encontrada 
          
            if (mysqli_num_rows($query) > 0) {

                $resultado_totais = array();

                while ($resultado = mysqli_fetch_assoc($query)) {

                    $resultado_totais[] = $resultado;
                }

                //fecha conexao
              
                fechaConexao($conexao);

                return $resultado_totais;
            } else {
        
                return false;
            }
          
        } else {
         
            return false;
        }
    } else {

        
        return false;
    }


}
