<?php
session_start();

?>


<?php if (isset($_SESSION['logado'])) : ?>

    <h1>usuario logado</h1>


    <a href="sair.php">sair</a>

<?php else : ?>


    <h1>pagina restrita volte tente novamente</h1>
    <a href="index.php">logar no sistema</a>

<?php endif; ?>