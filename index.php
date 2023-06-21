<?php include("models/conexao.php") ?>
<?php include("views/blades/header.php"); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="views/css/style.css">
    <div class="container pt-2 mt-5 p-3 rounded-2 shadow" id="main">
    <p class="h3 tt" >Blog</p>
    <a id="btn" href="views/login.php">
        <button class="full-rounded ms-4">
            <span class="textb">Cadastrar Usuário</span>
            <div class="border full-rounded"></div>
        </button>
    </a>
       
        <table class="table table-bordered table-striped table-hover mt-3" width="500px">
            <tr>
                <td>Imagens</td>
                <td>Noticia</td>
            </tr>

            <?php

            $query = mysqli_query($conexao, "SELECT * from posts INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN imagens on blog_blogimgs_codigo = id_imagem INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo group by blog_bloginfo_codigo;");
            while ($exibe = mysqli_fetch_array($query)) {?>
            <tr>
                <td><img class="rounded mx-auto d-block " src="cms/views/imgs/<?php echo $exibe[10] ?>" width="200px" alt=""></td>
                <td>
                    <a class="link-underline-opacity-0" href="cms/views/page.php?blog_codigo=<?php echo $exibe[0] ?>">
                    <h3 class="title" ><?php echo $exibe[5] ?></h3>
                    Criada por <b><?php echo $exibe[12] ?></b> em <?php echo $exibe[7] ?>
                    <hr>
                    <?php  echo substr($exibe[6],0,250)."..."  ?> 
                </a>
                </td>
            </tr>               
            <?php } ?>
        </table>
</div>
<?php include("views/blades/footer.php"); ?>