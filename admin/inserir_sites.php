<?php 

@$info=$_REQUEST["info"];
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bulma.min.css" media="screen" type="text/css"  />
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
   
    <title>Inserir sites relacionados</title>
</head>



<body>
    <?php include_once 'topo.php'; ?>
    <section class="centro">


        <?php if($info=="ok"): ?>

        <section class="notification is-success">
            <h1>dados  inseridos com sucesso</h1>
        </section>
        <?php endif; ?>
        <h1>inserir sites relacionados</h1>
        <section>

            <form action="inserts/inserir_sites.php" method="POST">

                <label for="nome">NOME DO SITE</label>
                <input type="text" name="nome" id="nome" required>
                <label for="link">LINK</label>
                <input type="text" name="link" id="link" required>
                <button type="submit"> inserir </button>


            </form>

            <a href="../index.php"><button class="button is-link"></a>Voltar</button></a>
        </section>


    </section>




    <?php include_once 'lateral_direita.php'; ?>
    <?php include_once 'rodape.php'; ?>


</body>

</html>