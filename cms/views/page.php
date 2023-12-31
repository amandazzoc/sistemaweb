<?php
include("../models/conexao.php")
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog</title>
</head>

<body class="bgbody">
    <div class="container p-3 mt-5 rounded-4 shadow-lg" id="main">
    <table class="table table-bordered table-striped" width="800">
            <?php
            $varblogCodigo = $_GET["blog_codigo"];

            $query = mysqli_query($conexao, "SELECT * from posts INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo 
            INNER JOIN imagens on blog_blogimgs_codigo = id_imagem 
            INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo 
            where blog_codigo = $varblogCodigo;");

            while ($exibe = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><img src="imgs/<?php echo $exibe[10] ?>" width="200px" alt=""></td>
                    <td>
                        <h3>
                            <?php echo $exibe[5] ?>
                        </h3>
                        Criada por <b>
                            <?php echo $exibe[12] ?>
                        </b> em
                        <?php echo $exibe[7] ?>
                        <hr>
                        <?php echo ($exibe[6])?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>