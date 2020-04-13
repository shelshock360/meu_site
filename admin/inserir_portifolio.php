<?php

@$info = $_REQUEST["info"];

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
        <section>
            <?php if ($info == "ok") : ?>
                <section class="notification is-success">
                    <h1>dados inseridos com sucesso</h1>
                </section>
            <?php endif; ?>

            <?php if ($info == "erro-extensao") : ?>
                <section class="notification is-danger">
                    <h1>extensão de arquivo não permitida envie arquivos com as seguintes extenções jpg,png ou gif </h1>
                </section>
            <?php endif; ?>

            <?php if ($info == "erro-tamanho") : ?>
                <section class="notification is-danger"> 
                    <h1> o tamanho do arquivo exede o tamanho permitido de 2MB </h1>
                </section>            
                <?php endif; ?>
                
            <?php if ($info == "erro-img") : ?>
                <section class="notification is-danger"> 
                    <h1> não foi possivel enviar o arquivo tente novamente </h1>
                </section>
            <?php endif; ?>
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