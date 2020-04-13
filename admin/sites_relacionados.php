<?php

@$info = $_REQUEST["info"];
?>


<?php
include("./funcao/select.php");

$consulta = select("sites_relacionados order by id asc ");
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bulma.min.css" media="screen" type="text/css" />
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
    <title>Painel Administrativo</title>
</head>

<body>
    <?php include_once 'topo.php'; ?>
    <section class="centro">
        <?php if ($info == "ok") : ?>
            <section class="notification is-success">
                <h1>dados editados com sucesso</h1>
            </section>
        <?php endif; ?>
        <h1>Sites Relacionados</h1>



        <div class="table is-hoverable">
            <div class="linha">
                <div class="coluna">N°</div>
                <div class="coluna">Titulo</div>
                <div class="coluna">Link</div>
                <div class="coluna">editar/excluir</div>
            </div>
            <?php
            if ($consulta == true) {

                for ($i = 0; $i < count($consulta); $i++) {


            ?>

                    <div class="linha">
                        <div class="coluna"><?php echo $i ?></div>
                        <div class="coluna"><?php echo $consulta[$i]['nome']; ?></div>
                        <div class="coluna"><?php echo $consulta[$i]['link']; ?></div>
                        <div class="coluna"><a href="editar_sites.php?id=<?php echo $consulta[$i]['id']; ?>"> Editar</a> <a href="#">excluir</a>
                        </div>
                <?php

                }
            } else {

                echo "nenhum dado encontrado";
            }

                ?>
                    </div>

    </section>
    <?php include_once 'lateral_direita.php'; ?>
    <?php include_once 'rodape.php'; ?>


</body>

</html>