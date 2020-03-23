<?php

$msg = 0;
@$msg = $_REQUEST["msg"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if ($msg == "enviado") : ?>
        <h1>mensagem enviado obrigado</h1>
        <?php else : ?>
        <fieldset>
            <legend>
                <h3>Formulario de contato</h3>
            </legend>
            <form action="processaForm.php" method="POST">

                <label for="nome">NOME:</label></br>
                <input id="nome" type="text" name="nome" required></br>

                <label for="telefone">TELEFONE:</label></br>
                <input id="telefone" type="text" name="telefone" required></br>

                <label for="email">EMAIL:</label></br>
                <input id="email" type="email" name="email" required></br>

                <label for="assunto">MENSAGEM</label></br>

                <textarea name="assunto" id="assunto"></textarea></br>

                <input type="submit" value="enviar">





            </form>
        </fieldset>
    <?php endif; ?>
</body>

</html> 