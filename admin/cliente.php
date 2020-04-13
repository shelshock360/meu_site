<?php
include("./funcao/select.php");

$consulta = select("clientes order by id asc ");
?>


<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bulma.min.css" media="screen" type="text/css"  />
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Painel Administrativo</title>
	</head>

	<body>
    <?php include_once 'topo.php'; ?>
       <section class="centro">
           
            <h1>Lista de clientes </h1>

            <div class="table is-hoverable">
            <div class="linha">
                <div class="coluna">N°</div>
                <div class="coluna">Nome</div>
                <div class="coluna">URL</div>
                <div class="coluna">Imagem</div>
           
            </div>
            <?php
            if ($consulta == true) {

                for ($i = 0; $i < count($consulta); $i++) {


            ?>

                    <div class="linha">
                        <div class="coluna"><?php echo$i ?></div>
                        <div class="coluna"><?php echo $consulta[$i]['nome']; ?></div>
                        <div class="coluna"><?php echo $consulta[$i]['url']; ?></div>
                        <div class="coluna"><?php echo $consulta[$i]['imagem']; ?></div>
                       
                    </div>

            <?php

                }
            }else{

                echo"nenhum dado encontrado";
            }

            ?>
        </div>

        
       </section>
       <?php include_once 'lateral_direita.php'; ?>
       <?php include_once 'rodape.php'; ?>

    
	</body>
	</html>
