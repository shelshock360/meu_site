<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
    <title>apresentação</title>
</head>

<body>
    <?php include_once 'topo.php'; ?>
    <section class="centro">

        <h1>apresentação</h1>

        <section>

            <form action="inserts/inserir_apresentacao.php" method="POST">

                <label for="titulo1">TITULO 1</label>
                <input type="text" name="titulo1" id="titulo1">

                <label for="titulo2">TITULO 2</label>
                <input type="text" name="titulo2" id="titulo2">

                <label for="sub">subtitulo</label>
                <input type="text" name="sub" id="sub">
                <button type="submit"> inserir </button>



            </form>
        </section>

    </section>


    <?php include_once 'lateral_direita.php'; ?>
    <?php include_once 'rodape.php'; ?>


</body>

</html>