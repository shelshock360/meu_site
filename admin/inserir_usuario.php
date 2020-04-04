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

            <form action="inserts/inserir_usuario.php" method="POST">

                <label for="login">login</label>
                <input type="text" name="login" id="login">

                <label for="senha">SENHA</label>
                <input type="password" name="senha" id="senha">

                <button type="submit"> inserir </button>



            </form>
        </section>
    </section>
    <?php include_once 'lateral_direita.php'; ?>
    <?php include_once 'rodape.php'; ?>


</body>

</html>