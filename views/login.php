<?php include("../models/conexao.php");
include("blades/header.php"); ?>
<div class="container mt-3">
    <form class="" action="../controllers/validar.php" method="post">
        <input type="text" name="campoNome">
        <input type="password" name="campoSenha">
        <input type="submit" value="Enviar" id="btn">
    </form>
</div>

<?php include("blades/footer.php"); ?>