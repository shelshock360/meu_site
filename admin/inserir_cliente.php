<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
    <title>Painel Administrativo</title>
</head>

<body>
    <?php include_once 'topo.php'; ?>
    <section class="centro">

        <section>

            <form action="inserts/inserir_cliente.php" method="POST">

                <label for="nome">NOME</label>
                <input type="text" name="nome" id="nome">
                <label for="img">imagem</label>
                <input type="file" id="img" name="img">
                <button type="submit"> inserir </button>



            </form>
        </section>

    </section>
    <?php include_once 'lateral_direita.php'; ?>
    <?php include_once 'rodape.php'; ?>


</body>

</html>