<?php

@$info = $_REQUEST["info"];
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
        <section>
            <?php if ($info == "ok") : ?>
                <section class="notification is-success">
                    <h1>dados inseridos com sucesso</h1>
                </section>
            <?php endif; ?> 

            <?php if ($info == "erro-extensao") : ?>
                <section class="notification is-danger">
                    <h1>extenção invalida</h1>
                </section>
            <?php endif; ?>

        
            <h1>inserir clientes</h1>
            <form action="inserts/inserir_cliente.php" method="POST" enctype="multipart/form-data"> 
                <label for="nome">NOME</label>
                <input type="text" name="nome" id="nome" required>
                <label for="img">imagem</label>
                <input type="file" id="img" name="img" required>
                <button type="submit"> inserir </button>



            </form>
        </section>

    </section>
    <?php include_once 'lateral_direita.php'; ?>
    <?php include_once 'rodape.php'; ?>


</body>

</html>