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
            <form action="inserts/inserir_portifolio.php" method="POST" enctype="multipart/form-data">

                <label for="titulo">TITULO</label>
                <input type="text" name="titulo" id="titulo">
                <label for="resumo">RESUMO</label>
                <textarea name="resumo" id="resumo"></textarea>
                <label for="conteudo">CONTEUDO</label>
                <textarea name="conteudo" id="conteudo"></textarea>
                <label for="data">DAta</label>
                <input type="datetime-local" id="data" name="data">
                <label for="img">imagem</label>
                <p><input type="file" id="img" name="img"> </p>


                <button type="submit"> inserir </button>



            </form>
        </section>
    </section>
    <?php include_once 'lateral_direita.php'; ?>
    <?php include_once 'rodape.php'; ?>


</body>

</html>